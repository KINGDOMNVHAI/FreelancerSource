<form action="{{ route ('search-product')}}" method="POST">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="keyword" placeholder="Tìm sản phẩm">
        <div class="input-group-append">
            <span class="input-group-text bg-transparent text-primary">
                <i class="fa fa-search"></i>
            </span>
        </div>
    </div><br>
    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
        <input type="radio" class="custom-control-input" id="price-1" name="price" value="price-1">
        <label class="custom-control-label" for="price-1">All price</label>
    </div>
    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
        <input type="radio" class="custom-control-input" id="price-2" name="price" value="price-2">
        <label class="custom-control-label" for="price-2">0 - 100.000 VND</label>
    </div>
    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
        <input type="radio" class="custom-control-input" id="price-3" name="price" value="price-3">
        <label class="custom-control-label" for="price-3">101.000 - 200.000 VND</label>
    </div>
    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
        <input type="radio" class="custom-control-input" id="price-4" name="price" value="price-4">
        <label class="custom-control-label" for="price-4">201.000 - 300.000 VND</label>
    </div>
    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
        <input type="radio" class="custom-control-input" id="price-5" name="price" value="price-5">
        <label class="custom-control-label" for="price-5">> 301.000 VND</label>
    </div>

    <input type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" value="Tìm kiếm" />
</form>
