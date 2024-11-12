@extends('dashboard.layout.app')
@section('content')
  
<section class="section">
  <div class="row">
    <div class="col">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">إضافة منتج</h5>

          <!-- General Form Elements -->
          <form method="POST" action="{{route('slider.store')}}">
            @csrf
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label"><span>الصورة الأولى</span></label>
              <div class="col-sm-10">
                <input class="form-control" name="slide1" type="file" id="formFile">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label"><span>الصورة الثانية</span></label>
              <div class="col-sm-10">
                <input class="form-control" name="slide2" type="file" id="formFile">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label"><span>الصورة الثالثة</span></label>
              <div class="col-sm-10">
                <input class="form-control" name="slide3" type="file" id="formFile">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-sm-10">
                <button class="btn btn-success"><span>حفظ</span></button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>
  </div>
</section>
@endsection