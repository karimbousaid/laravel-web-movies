@if (session()->has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ session()->get('success') }}</strong>
    </div>
@endif