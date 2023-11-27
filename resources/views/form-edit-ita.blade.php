@extends('layouts-school.app')
@section('content')
<div class="row">
    <div class="col-md-10" style="margin-left: auto; margin-right: auto;">
        <form action="{{ route('edit.ita.config') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md">
                <input type="hidden" name="id" value="{{ $itaEdit->id }}">
                <div style="margin-top: 20px;">
                    ชื่อเรื่อง ::
                    <input type="text" class="form-control" name="title_name" id="title_name" value="{{ $itaEdit->title_name }}">
                </div>
                <div style="margin-top: 20px;">
                    เนื้อหา
                    <textarea class="form-control" name="content" id="content" cols="30" rows="10" valye="{{ $itaEdit->content }}">
                        {{ $itaEdit->title_name }}</textarea>
                </div>
                <div style="margin-top: 20px;">
                    รูปประกอบ
                    <input class="form-control" type="file" name="img_content" id="img_content" value="{{ $itaEdit->image_ita }}">
                </div>
                <div style="margin-top: 20px;">
                    ไฟล์
                    <input class="form-control" type="file" name="duc_file" id="duc_file" value="{{ $itaEdit->duc_file }}">
                </div>
                <div style="margin-top: 20px;">
                    ลิงค์
                    <input class="form-control" type="text" name="link" id="link">
                </div>
                <div style="margin-top: 20px;">
                    ลิงค์ย่อย
                    <input class="form-control" type="text" name="link_sub" id="link_sub">
                </div>
            </div>
            <div class="col-md" style="margin-top: 10px;">
                <div for="">
                    <button class="btn btn-danger btn-xs insert-content" data-id="insert">เพิ่มข้อมูล</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
