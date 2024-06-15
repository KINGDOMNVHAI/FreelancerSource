<form action="{{ route ('search-product')}}" method="POST">
<div class="border-bottom mb-4 pb-4">
    {{ csrf_field() }}
    <div class="input-group">
        @if($keyword != null)
        <input type="text" class="form-control" name="keyword" value="{{$keyword}}">
        @else
        <input type="text" class="form-control" name="keyword" placeholder="Tìm sản phẩm">
        @endif
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
</div>
<div class="border-bottom mb-4 pb-4">
    @foreach($listCategoriesCount as $category)
    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
        <input type="checkbox" id="idCat-{{$category->id_cat_product}}" name="idCat[]" class="custom-control-input" value="{{$category->id_cat_product}}">
        <label class="custom-control-label" for="idCat-{{$category->id_cat_product}}">{{$category->name_cat_product}} ({{$category->count_product}})</label>
    </div>
    @endforeach
    <input type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" value="Tìm kiếm" />
</div>
</form>
