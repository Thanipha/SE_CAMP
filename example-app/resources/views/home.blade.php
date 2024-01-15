@extends('layouts.default')

@section('title', 'My Form')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Workshop #HTML-FORM</h3>
        </div>
        <form>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="InputName">ชื่อ</label>
                        <input type="text" class="form-control" id="InputName" placeholder="Enter name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="InputLastname">สกุล</label>
                        <input type="text" class="form-control" id="InputLastname" placeholder="Enter lastname">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>วัน/เดือน/ปี</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="InputAge">อายุ</label>
                        <input type="number" class="form-control" id="InputAge" placeholder="Enter age">
                    </div>
                </div>
                <div class="form-group">
                    <label>เพศ</label>
                    <div class="form-check">
                        <input type="radio" name="Gender" class="form-check-input" id="Male">
                        <label class="form-check-label" for="Male">ชาย</label>
                        &emsp;&emsp;&emsp;
                        <input type="radio" name="Gender" class="form-check-input" id="Female">
                        <label class="form-check-label" for="Female">หญิง</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">รูป</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>ที่อยู่</label>
                    <textarea class="form-control" rows="3" placeholder="Enter address"></textarea>
                </div>
                <div class="form-group col-md-6 ">
                    <label>สีที่ชอบ</label>
                    <select class="form-control">
                        <option>แดง</option>
                        <option>เหลือง</option>
                        <option>ฟ้า</option>
                        <option>ขาว</option>
                        <option>ดำ</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>แนวเพลงที่ชอบ</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">เพื่อชีวิต</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">ลูกทุ่ง</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">อื่น ๆ </label>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
                </div>
            </div>
            <div class="card-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
