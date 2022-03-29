<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
<div class="row mb-4">
<div class="col-12">
    
    <form action="/product/<?= $data['id'] ?>/update" method="post">
        <div class="mb-3">
        <input type="hidden" name="_method" value="put" />
        <label class="form-label" for="name">Product Name</label>
        <br />
        <input class="form-control" type="text" id="name" placeholder="Input product name" name="name" value="<?= $data['name'] ?>" />
        </div>
        <br />
        <label for="stock">Stock</label>
        <br />
        <input class="form-control" type="number" min="1" id="stock" placeholder="Input product stock" name="stock" value="<?= $data['stock'] ?>" />
        <br /> 
        <label for="price">Price</label>
        <br />
        <input class="form-control" type="number" min="0" id="price" placeholder="Input product price" name="price" value="<?= $data['price'] ?>" />
        <br />
        <label for="category">Category</label>
        <br />
        <select class="form-select" name="category" id="category">
            <option value="utilities" <?php $data['category'] == "utilities" ? "selected" : "" ?>>Utilities</option>
            <option value="food_and_beverages" <?php $data['category'] == "food_and_beverages" ? "selected" : "" ?>> Food & Beverages</option>
            <option value="books" <?php $data['category'] == "books" ? "selected" : "" ?>>Books</option>
        </select>
        
        <br />
        <br />
        <button type="submit" class="btn btn-success" >Submit</button>
    </form>
<?= $this->endSection() ?>