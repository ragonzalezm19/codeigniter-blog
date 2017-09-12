<h1><?= $title ?></h1>

<?= validation_errors() ?>

<?= form_open('posts/create') ?>
  <div class="form-group">
    <label>Title</label>
    <input name="title" type="text" class="form-control" placeholder="Add title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control" placeholder="Add Body"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>