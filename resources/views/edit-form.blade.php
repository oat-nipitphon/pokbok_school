@extends('layouts-school.app')
@section('content')
    <div class="row">
        @foreach ($dbcontents as $dbcontent)
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="{{ route('edit.new.config') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $dbcontent->id }}">
                <div class="col-md-12">
                    <div for="">
                        ชื่อเรื่อง ::
                        <input type="text" class="form-control" name="title_name" id="title_name" value="{{ $dbcontent->title_name }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div for="">
                        เนื้อหา
                        <textarea class="form-control" name="content" id="content" cols="30" rows="10" value="{{ $dbcontent->content }}">{{ $dbcontent->content }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div for="">
                        รูปประกอบ
                        <input class="form-control" type="file" name="img_content" id="img_content">
                    </div>
                    <div for="">
                        ไฟล์
                        <input class="form-control" type="file" name="duc_file" id="duc_file">
                    </div>
                    <div for="">
                        ไอคอน
                        <input class="form-control" type="file" name="icon" id="icon">
                    </div>
                </div>
                <div class="col-md-12">
                    <div for="">
                        ประเภท
                        <select name="type" id="type" class="form-control">
                            <option value="1">ข่าวประชาสัมพันธ์</option>
                            <option value="2">ภาพกิจกรรม</option>
                            <option value="3">ข่าวการศึกษา</option>
                        </select>
                    </div>
                    <div for="">
                        ลิงค์
                        <input class="form-control" type="text" name="link" id="link" value="{{ $dbcontent->link }}">
                    </div>
                    <div for="">
                        ลิงค์ย่อย
                        <input class="form-control" type="text" name="link_sub" id="link_sub" value="{{ $dbcontent->link_sub }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div style="margin-top: 20px;">
                        <button class="btn btn-success btn-xs insert-content" data-id="insert">อัพเดท</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
        @endforeach
    </div>
@endsection
