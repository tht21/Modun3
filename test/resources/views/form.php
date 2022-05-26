<form method="post" action="/unicode">
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3">
            <input type="hidden" class="form-control" value="<?= csrf_token() ?>">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
</form>
