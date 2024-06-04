<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<div id="search-container" class="col-md-12">
    <h1> Bem vindo a livraria </h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="books-container" class="col-md-12">
    <h2>Outros Livros</h2>
    <p class="subtitle">Veja outros livros recomendados</p>
    <div id="cards-container" class="row">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card col-md-3">
            <img src="/img/books/<?php echo e($book->image); ?>" alt="<?php echo e($book->title); ?>">
            <div class="card-body">
                <p class="card-year"><?php echo e($book->year); ?></p>
                <h5 class="card-title"><?php echo e($book->title); ?></h5>
                <p class="card-genre"><?php echo e($book->genre); ?></p>
                <a href="/books/<?php echo e($book->id); ?>" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lucas\Downloads\FORA Download\FACUL\Laravel\library-management\resources\views/welcome.blade.php ENDPATH**/ ?>