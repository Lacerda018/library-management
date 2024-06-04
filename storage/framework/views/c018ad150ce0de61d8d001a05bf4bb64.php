

<?php $__env->startSection('title', $book->title); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/books/<?php echo e($book->image); ?>" class="image-fluid" alt="<?php echo e($book->title); ?>">
        </div>
        <div id="info-container" class="col-md-6">
            <h1><?php echo e($book->title); ?></h1>
            <p class="book-author"><ion-icon name="book"></ion-icon> <?php echo e($book->author); ?> </p>
            <p class="books-year"><ion-icon name="star-outline"></ion-icon>  <?php echo e($book->year); ?> </p>
            <p class="books-genre"><ion-icon name="tv"></ion-icon> <?php echo e($book->genre); ?> </p>
            <a href="#" class="btn btn-primary" id="book-submit">Ler livro</a>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lucas\Downloads\FORA Download\FACUL\Laravel\library-management\resources\views/books/show.blade.php ENDPATH**/ ?>