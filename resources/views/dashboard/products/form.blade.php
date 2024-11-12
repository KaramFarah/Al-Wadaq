<div class="row mb-3">
  <label class="col-sm-2 col-form-label"><span>الصنف</span></label>
  <div class="col-sm-10">
    <select name="category_id" class="form-select" aria-label="Default select example">
      @foreach ($categories as $item)
      @isset($product->category)
        <option @selected($item->id == $product->category->id ) value="{{$item->id}}"><span>{{$item->name}}</span></option>
      @else

        <option value="{{$item->id}}"><span>{{$item->name}}</span></option>
      @endisset
      @endforeach
    </select>
  </div>
</div>
<div class="row mb-3">
  <label for="inputText" class="col-sm-2 col-form-label"><span>الوصف</span></label>
  <div class="col-sm-10">
    <input type="text" name="description" class="form-control" value="{{isset($product) ? ($product->description ?? '') : ''}}">
  </div>
</div>
<div class="row mb-3">
  <label for="inputText"  class="col-sm-2 col-form-label"><span>الوزن</span></label>
  <div class="col-sm-10">
    <input type="number" name="weight" class="form-control" value="{{isset($product) ? ($product->weight ?? '') : ''}}">
  </div>
</div>
<div class="row mb-3">
  <label for="inputText" class="col-sm-2 col-form-label"><span>السعر</span></label>
  <div class="col-sm-10">
    <input type="number" name="price" class="form-control" value="{{isset($product) ? ($product->price ?? '') : ''}}">
  </div>
</div>
<div class="row mb-3">
  <label for="inputNumber" name="photo" class="col-sm-2 col-form-label"><span>صورة المنتج</span></label>
  <div class="col-sm-10">
    <input class="form-control" name="photo" type="file" id="formFile">
  </div>
</div>
<div class="row mb-3">
  <legend class="col-form-label col-sm-2 pt-0"><span>منتج مميز ؟</span></legend>
  <div class="col-sm-10">
    <div class="form-check">
      <input class="form-check-input" name="featured" {{isset($product) ? ($product->featured ? 'checked' : '') : ''}} type="checkbox" id="gridCheck1" value="1">
    </div>
  </div>
</div>
<div class="row mb-3">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-success"><span>حفظ</span></button>
  </div>
</div>