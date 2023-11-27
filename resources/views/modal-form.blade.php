<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    เพิ่มข้อมููล
</button>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div for="">
                    ชื่อเรื่อง ::
                    <input type="text" class="form-control" name="title_name" id="title_name">
                </div>
                <div for="">
                    เนื้อหา
                    <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                </div>
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
                <div for="">
                    ประเภท
                    <select class="form-control" name="type" id="type">
                        <option value="1">ข่าวประชาสัมพันธ์</option>
                        <option value="2">ภาพกิจกรรม</option>
                        <option value="3">ข่าวการศึกษา</option>
                    </select>
                </div>
                <div for="">
                    ลิงค์
                    <input class="form-control" type="text" name="link" id="link">
                </div>
                <div for="">
                    ลิงค์ย่อย
                    <input class="form-control" type="text" name="link_sub" id="link_sub">
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 10px;">
                <div for="">
                    <button class="btn btn-danger btn-xs insert-content" data-id="insert">เพิ่มข้อมูล</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
    </div>
</div>
</div>
