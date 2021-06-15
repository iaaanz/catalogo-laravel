<template>
  <div id="overlay">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">{{ title }}</h3>
          <button type="button" class="btn-close" @click="onCancel" />
        </div>
        <div class="modal-body">
          <div v-if="loading" class="d-flex justify-content-center m-3">
            <div class="spinner-border" role="status"></div>
          </div>
          <div class="category">
            <div class="row">
              <div class="col">
                <select
                  id="category"
                  ref="category"
                  v-model="catSelected"
                  class="form-control"
                  name="category"
                >
                  <option value="null" disabled selected hidden>Categoria</option>
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
      catSelected: null,
      categories: null,
      subcategory: null,
      subcategoryId: null,
      submitted: false,
      title: 'Nova subcategoria',

      //  TODO: Tratar  quando a subcategoria for inválida
    };
  },
  watch: {
    // call again the method if the route changes
    $route: 'fetchData',
  },
  created() {
    this.fetchData();
  },
  mounted() {
    if (this.subcategoryEdit != null) {
      this.subcategory = this.subcategoryEdit.name;
      this.subcategoryId = this.subcategoryEdit.id;
      this.catSelected = this.subcategoryEdit.catId;
      this.title = 'Alterar subcategoria';
    }
  },
  methods: {
    fetchData() {
      this.loading = true;
      axios
        .get('/v1/admin/categorias/all')
        .then((res) => {
          if (res.status === 200) {
            this.loading = false;
            this.categories = res.data;
          }
        })
        .catch((err) => {
          console.log(err);
        });
    },
    onConfirm() {
      this.submitted = true;

      if (!this.catSelected) {
        this.$refs.category.focus();
        this.submitted = false;
        return false;
      }

      if (!this.subcategory) {
        this.$refs.subcategory.focus();
        this.submitted = false;
        return false;
      }

      if (this.subcategoryId) {
        return axios
          .patch(`/v1/admin/subcategorias/edit/${this.subcategoryId}`, {
            subcategory: this.subcategory,
            category_id: this.catSelected,
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
          category_id: this.catSelected,
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
