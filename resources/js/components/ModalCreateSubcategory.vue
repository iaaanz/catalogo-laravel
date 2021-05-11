<template>
  <div id="overlay">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">{{ title }}</h3>
          <button type="button" class="btn-close" @click="onCancel" />
        </div>
        <div class="modal-body">
          <div class="category">
            <div class="row">
              <div class="col">
                <select id="category" v-model="selected" class="form-control" name="category">
                  <option v-for="category in categories" :key="category.id" :value="category.id">
                    {{ category.name }}
                  </option>
                </select>
              </div>
            </div>
            <div class="row pt-2">
              <div class="col">
                <input ref="subcategory" v-model="subcategory" type="text" class="form-control" />
              </div>
              <!-- <span v-if="msg">{{ msg }}</span> -->
            </div>
          </div>
          <div class="text-end pt-3">
            <button
              class="btn btn-md text-white me-2"
              style="background-color: #00cd45; width: 110px"
              :disabled="submitted"
              @click="onConfirm"
            >
              Salvar
            </button>
            <button
              class="btn btn-md text-white"
              style="background-color: rgb(173, 173, 173)"
              @click="onCancel"
            >
              Cancelar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from 'axios';

export default {
  props: {
    subcategoryEdit: {
      type: Object,
      default: null,
    },
  },
  data() {
    return {
      selected: null,
      categories: null,
      subcategory: null,
      subcategoryId: null,
      submitted: false,
      title: 'Nova subcategoria',

      //  TODO: Tratar  quando a subcategoria for inválida
    };
  },
  mounted() {
    if (this.subcategoryEdit != null) {
      this.subcategory = this.subcategoryEdit.name;
      this.subcategoryId = this.subcategoryEdit.id;
      this.title = 'Alterar subcategoria';
    }

    axios
      .get('/v1/admin/categorias/all')
      .then((res) => {
        console.log(res.data);
        this.categories = res.data;
      })
      .catch((err) => {
        console.log(err);
      });
    // TODO: Fazer GET aqui dentro para pegar as categorias disponíveis porra :)

    console.log('montado');
  },
  methods: {
    validateCategory(subcategory) {
      if (!subcategory) {
        this.$refs.subcategory.focus();
        return false;
      }
      return true;
    },
    onConfirm() {
      this.submitted = true;
      if (!this.validateCategory(this.subcategory)) {
        return false;
      }

      if (this.subcategoryId) {
        return axios
          .patch(`/v1/admin/subcategorias/edit/${this.subcategoryId}`, {
            subcategory: this.subcategory,
          })
          .then((res) => {
            if (res.status === 200) {
              location.reload();
            }
          })
          .catch((err) => {
            console.log(err);
          });
      }

      return axios
        .post('/v1/admin/subcategorias/create', {
          subcategory: this.subcategory,
          category_id: this.selected,
        })
        .then((res) => {
          if (res.status === 200) {
            location.reload();
          }
        })
        .catch((err) => {
          console.log(`deu ruim :/ : ${err.data}`);
        });
    },
    onCancel() {
      this.$emit('cancel');
    },
  },
};
</script>
