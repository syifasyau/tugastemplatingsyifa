<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
<div class="row mb-4">
<div class="col-12">
<form action="/product/create" method="post">
<div class="mb-3">
  <label for="name" class="form-label">Product Name</label>
  <input type="text" class="form-control" id="name" placeholder="Input product name" name="name" />
</div>
<div class="mb-3">
  <label for="stock" class="form-label">Stock</label>
  <input type="number" class="form-control" id="stock" rows="3" placeholder="Input product stock" name="stock" />
</div>
<div class="mb-3">
    <label for="price">Price</label>
    <br />
    <input type="number"class="form-control" min="0" id="price" placeholder="Input product price" name="price" />
</div>

<label for="category">Category</label>
        <br />
        <select class="form-select" name="category" id="category">
            <option value="utilities">Utilities</option>
            <option value="food_and_beverages">Food & Beverages</option>
            <option value="books">Books</option>
        </select>
        <br />
        <button type="submit" class="btn btn-success" >Submit</button>
    </form>
<?= $this->endSection() ?>