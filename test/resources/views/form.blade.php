<form method="post" action="/unicode">
    <div>
        <input type="text" name="username" placeholder="Nhaap..">
        <input type="hidden" name="_method" value="put"> 
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
        <button type="submit">Submit</button>
    </div>
</form>