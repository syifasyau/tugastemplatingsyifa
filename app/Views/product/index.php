<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
<div class="row mb-4">
<div class="col-12">
    <table class="table table-hover">
        <thead>
            <tr class="p-3 mb-4 bg-warning text-dark"></div>
                <td>No.</td>
                <td>Name</td>
                <td>Stock</td>
                <td>Price</td>
                <td>Category</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
        <div class="card-header"><a href="/product/new"class="btn btn-success"> Add new product</a></div>
        
        <br />
        <br />
        <?php $no = 0; ?>
        <?php foreach ($products as $item): ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['stock'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['category'] ?></td>
                <td>

                <td>
                    <div class="btn-group " role="group " aria-label="Basic example ">
                        <a href="/product/<?= $item['id'] ?>/edit" class="btn btn-info text-white ">
                            <i class='bx bx-pencil'></i> Edit
                        </a>
                        <form action="/product/<?= $item['id'] ?>" method="post" onsubmit="return confirm(`Are you sure?`)">
                            <input type="hidden" name="_method" value="delete" />
                            <button type="submit" class="btn btn-danger text-white">Delete</button>
                        </form>
                    </div>
            </tr>

        <?php endforeach ?>
        </tbody>
    </table>
<?= $this->endSection() ?>