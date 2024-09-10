<template>
  <div class="product-manager">
    <h1 class="title">Product Management</h1>
    <div class="actions">
      <button class="btn btn-primary" @click="showCreateModal = true">Add New Product</button>
    </div>
    <table class="product-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Stock</th>
          <th>Category</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="product in products" :key="product.id">
          <td>{{ product.name }}</td>
          <td>{{ product.description }}</td>
          <td>{{ product.price | currency }}</td>
          <td>{{ product.stock }}</td>
          <td>{{ product.category.name }}</td>
          <td>
            <button class="btn btn-edit" @click="editProduct(product.id)">Edit</button>
            <button class="btn btn-delete" @click="deleteProduct(product.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
    
    <!-- Create/Edit Product Modal -->
    <div v-if="showCreateModal || showEditModal" class="modal-overlay" @click="closeModal">
      <div class="modal-content" @click.stop>
        <h2>{{ isEdit ? 'Edit Product' : 'Create Product' }}</h2>
        <form @submit.prevent="submitForm" class="modal-form">
          <input v-model="form.name" placeholder="Name" required>
          <textarea v-model="form.description" placeholder="Description" required></textarea>
          <input v-model="form.price" type="number" placeholder="Price" required>
          <input v-model="form.stock" type="number" placeholder="Stock" required>
          <input v-model="form.image" type="text" placeholder="Image URL" required>
          <select v-model="form.category_id" required>
            <option v-for="category in categories" :key="category.id" :value="category.id">
              {{ category.name }}
            </option>
          </select>
          <div class="modal-buttons">
            <button type="submit" class="btn btn-primary">{{ isEdit ? 'Update' : 'Create' }}</button>
            <button type="button" class="btn btn-secondary" @click="closeModal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      products: [],
      categories: [],
      form: {
        id: null,
        name: '',
        description: '',
        price: '',
        stock: '',
        image: '',
        category_id: null
      },
      showCreateModal: false,
      showEditModal: false,
      isEdit: false
    };
  },
  methods: {
    async fetchProducts() {
      const response = await axios.get('/admin/products');
      this.products = response.data;
    },
    async fetchCategories() {
      const response = await axios.get('/admin/categories');
      this.categories = response.data;
    },
    showCreateProduct() {
      this.form = {
        id: null,
        name: '',
        description: '',
        price: '',
        stock: '',
        image: '',
        category_id: null
      };
      this.showCreateModal = true;
      this.isEdit = false;
    },
    async submitForm() {
      if (this.isEdit) {
        await axios.put(`/admin/products/${this.form.id}`, this.form);
      } else {
        await axios.post('/admin/products', this.form);
      }
      this.fetchProducts();
      this.closeModal();
    },
    async editProduct(id) {
      const response = await axios.get(`/admin/products/${id}`);
      this.form = response.data;
      this.showCreateModal = true;
      this.isEdit = true;
    },
    async deleteProduct(id) {
      if (confirm('Are you sure you want to delete this product?')) {
        await axios.delete(`/admin/products/${id}`);
        this.fetchProducts();
      }
    },
    closeModal() {
      this.showCreateModal = false;
      this.showEditModal = false;
    }
  },
  created() {
    this.fetchProducts();
    this.fetchCategories();
  }
};
</script>

<style scoped>
.product-manager {
  padding: 20px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f5f5f5;
}

.title {
  color: #333;
  font-size: 26px;
  margin-bottom: 20px;
}

.actions {
  margin-bottom: 20px;
}

.btn {
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  margin-right: 10px;
  transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.btn-primary {
  background-color: #007bff;
  color: white;
}

.btn-primary:hover {
  background-color: #0056b3;
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.btn-edit {
  background-color: #28a745;
  color: white;
}

.btn-edit:hover {
  background-color: #218838;
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.btn-delete {
  background-color: #dc3545;
  color: white;
}

.btn-delete:hover {
  background-color: #c82333;
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.product-table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
  background-color: white;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.product-table th,
.product-table td {
  padding: 12px;
  border: 1px solid #ddd;
  text-align: left;
}

.product-table th {
  background-color: #343a40;
  color: white;
  font-weight: bold;
}

.product-table tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
}

.modal-content {
  background: white;
  padding: 30px;
  border-radius: 8px;
  width: 500px;
  max-width: 100%;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.modal-form {
  display: flex;
  flex-direction: column;
}

.modal-form input,
.modal-form textarea,
.modal-form select {
  margin-bottom: 15px;
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 14px;
}

.modal-buttons {
  display: flex;
  justify-content: flex-end;
}

.modal-buttons button {
  margin-left: 10px;
}
</style>