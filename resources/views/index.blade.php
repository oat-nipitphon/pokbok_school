@extends('layouts-school.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        {{-- Layout left Start --}}
        <div class="col-md-2" style="background-color: hsl(200deg 100% 91%);">
            <div class="card">
                <div class="row ibox-title">
                    <label class="ibox-font-title">เมนูโรงเรียน</label>
                </div>
                <div class="row ibox-content">
                    <label class="ibox-font-content">
                        <img src="" alt="">
                        <a href="">
                            ประวัติโรงเรียน
                        </a>
                    </label>
                    <label class="ibox-font-content">
                        <img src="" alt="">
                        <a href="">
                            สัญลักษณ์โรงเรียน
                        </a>
                    </label>
                    <label class="ibox-font-content">
                        <img src="" alt="">
                        <a href="">
                            วิสัยทัศน์ / ปรัชญา
                        </a>
                    </label>
                    <label class="ibox-font-content">
                        <img src="" alt="">
                        <a href="">
                            พันธกิจ / เป้าหมาย
                        </a>
                    </label>
                    <label class="ibox-font-content">
                        <img src="" alt="">
                        <a href="">
                            เพลงโรงเรียน
                        </a>
                    </label>
                    <label class="ibox-font-content">
                        <img src="" alt="">
                        <a href="">
                            หลักสูตรที่เปิดสอน
                        </a>
                    </label>
                    <label class="ibox-font-content">
                        <img src="" alt="">
                        <a href="">
                            ทำเนียบผู้บริหาร
                        </a>
                    </label>
                </div>
                <div class="row ibox-title">
                    <label class="ibox-font-title">ลิ้งค์น่าสนใจ</label>
                </div>
                <div class="row ibox-content">
                    <label for="">
                        <label for="">
                            <img src="" alt="">
                        </label>
                    </label>
                </div>
                <div class="row ibox-title">
                    <label class="ibox-font-title">สถิติผู้เยี่ยมชม</label>
                </div>
                <div class="row ibox-content">
                    <label for="">
                        <label for="">
                            <img src="" alt="">
                        </label>
                    </label>
                </div>
            </div>
        </div>
        {{-- Layout left End --}}

        {{-- Layout Center Start --}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <marquee scrollamount="6">
                        {{-- {{ __('Dashboard') }} --}}
                        ยินดีต้อนรับเข้าสู่เว็บไซต์ โรงเรียนโพนบกค่ะ...
                    </marquee>
                </div>

                <div class="card-body">

                    {{-- ข่าวประชาสัมพันธ์ --}}
                    <div class="row">
                        <div class="ibox-title">
                            <label class="ibox-font-title">
                                <span>ข่าวประชาสัมพันธ์</span>
                                <span style="margin-left: 500px;">อ่านทั้งหมด</span>
                            </label>
                        </div>
                        <div class="ibox-content">
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="col-sm text-center" >
                                        <img src="http://www.filesthaischool0.com/files/uppic/20101247/news/thumb/20101247_0_20211012-152728.jpg" width="80%">
                                    </div>
                                    <div class="col-sm">
                                        <label for="">
                                            เนื้อหา
                                        </label>
                                    </div>

                                    {{-- @foreach ($status_users as $status_user)
                                    {{ $status_users->position }}
                                    @if ($status_users->position == 'admin')
                                    <div class="col-sm">
                                        <label for="">
                                            <button class="btn btn-info">แก้ไข</button>
                                        </label>
                                    </div>
                                @endif
                                    @endforeach --}}

                                </div>
                                <div class="col-md-6">
                                    <div class="col-md">
                                        <span>
                                            <img src="http://www.filesthaischool0.com/files/uppic/20101247/news/thumb/20101247_0_20210824-005331.jpg" width="130" height="130">
                                        </span>
                                        <span>
                                            เนื้อหา
                                        </span>
                                    </div>
                                    <div class="col-md">
                                        <span>
                                            <img src="http://www.filesthaischool0.com/files/uppic/20101247/news/thumb/20101247_0_20210824-005331.jpg" width="130" height="130">
                                        </span>
                                        <span>
                                            เนื้อหา
                                        </span>
                                    </div>
                                    <div class="col-md">
                                        <span>
                                            <img src="http://www.filesthaischool0.com/files/uppic/20101247/news/thumb/20101247_0_20210824-005331.jpg" width="130" height="130">
                                        </span>
                                        <span>
                                            เนื้อหา
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ภาพกิจกรรม --}}
                    <div class="row">
                        <div class="ibox-title">
                            <label class="ibox-font-title">
                                <span>ภาพกิจกรรม</span>
                                <span style="margin-left: 500px;">อ่านทั้งหมด</span>
                            </label>
                        </div>
                        <div class="ibox-content">
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="col-sm text-center" >
                                        <img src="http://www.filesthaischool0.com/files/uppic/20101247/news/thumb/20101247_0_20211012-152728.jpg" width="80%">
                                    </div>
                                    <div class="col-sm">
                                        <label for="">
                                            เนื้อหา
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md">
                                        <span>
                                            <img src="http://www.filesthaischool0.com/files/uppic/20101247/news/thumb/20101247_0_20210824-005331.jpg" width="130" height="130">
                                        </span>
                                        <span>
                                            เนื้อหา
                                        </span>
                                    </div>
                                    <div class="col-md">
                                        <span>
                                            <img src="http://www.filesthaischool0.com/files/uppic/20101247/news/thumb/20101247_0_20210824-005331.jpg" width="130" height="130">
                                        </span>
                                        <span>
                                            เนื้อหา
                                        </span>
                                    </div>
                                    <div class="col-md">
                                        <span>
                                            <img src="http://www.filesthaischool0.com/files/uppic/20101247/news/thumb/20101247_0_20210824-005331.jpg" width="130" height="130">
                                        </span>
                                        <span>
                                            เนื้อหา
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ข่าวการศึกษา --}}
                    <div class="row">
                        <div class="ibox-title">
                            <label class="ibox-font-title">
                                <span>ข่าวการศึกษา</span>
                                <span style="margin-left: 500px;">อ่านทั้งหมด</span>
                            </label>
                        </div>
                        <div class="ibox-content">
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="col-sm text-center" >
                                        <img src="http://www.filesthaischool0.com/files/uppic/20101247/news/thumb/20101247_0_20211012-152728.jpg" width="80%">
                                    </div>
                                    <div class="col-sm">
                                        <label for="">
                                            เนื้อหา
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md">
                                        <span>
                                            <img src="http://www.filesthaischool0.com/files/uppic/20101247/news/thumb/20101247_0_20210824-005331.jpg" width="130" height="130">
                                        </span>
                                        <span>
                                            เนื้อหา
                                        </span>
                                    </div>
                                    <div class="col-md">
                                        <span>
                                            <img src="http://www.filesthaischool0.com/files/uppic/20101247/news/thumb/20101247_0_20210824-005331.jpg" width="130" height="130">
                                        </span>
                                        <span>
                                            เนื้อหา
                                        </span>
                                    </div>
                                    <div class="col-md">
                                        <span>
                                            <img src="http://www.filesthaischool0.com/files/uppic/20101247/news/thumb/20101247_0_20210824-005331.jpg" width="130" height="130">
                                        </span>
                                        <span>
                                            เนื้อหา
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- เว็บบอร์ด --}}
                    <div class="row">
                        <div class="ibox-title">
                            <label class="ibox-font-title">
                                <span>เว็บบอร์ด</span>
                                <span style="margin-left: 500px;">อ่านทั้งหมด</span>
                            </label>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-12" style="margin-top: 10px;">
                                    <label class="col-sm text-center" style="margin-left: 30px;">
                                        <span for="">
                                            <img src="" alt="">
                                        </span>
                                        <span for="">หัวข้อ</span>
                                    </label>
                                    <label style="margin-left: 550px;">
                                        วันที่
                                    </label>
                                </div>
                                <div class="col-md-12" style="margin-top: 10px;">
                                    <label class="col-sm text-center" style="margin-left: 30px;">
                                        <span for="">
                                            <img src="" alt="">
                                        </span>
                                        <span for="">หัวข้อ</span>
                                    </label>
                                    <label style="margin-left: 550px;">
                                        วันที่
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- Layout Center End --}}

        {{-- Layout Right Start --}}
        <div class="col-md-2" style="background-color: hsl(200deg 100% 91%);">
            <div class="card">

                {{-- Download Document Start --}}
                <div class="row">
                    <div class="ibox-content">
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_share/images/download-th.png" alt="">
                            </a>
                        </label>
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_share/images/edownload-th.png" alt="">
                            </a>
                        </label>
                    </div>
                </div>

                {{-- Class School Start --}}
                <div class="row">
                    <div class="row ibox-content">
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-223026.jpg" alt="">
                            </a>
                        </label>
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-225639.png" alt="">
                            </a>
                        </label>
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-225646.png" alt="">
                            </a>
                        </label>
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-222202.png" alt="">
                            </a>
                        </label>
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-221921.png" alt="">
                            </a>
                        </label>
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-221932.png" alt="">
                            </a>
                        </label>
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-221943.png" alt="">
                            </a>
                        </label>
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-221954.png" alt="">
                            </a>
                        </label>
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200510-222037.png" alt="">
                            </a>
                        </label>
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_school/20101247/menu/m_0_20200711-081141.jpg" alt="">
                            </a>
                        </label>
                        {{-- ITA Start --}}
                        <label class="ibox-font-title">
                            <a href="">
                                <img src="http://www.thaischool.in.th/_files_share/images/ico_ita.png" alt="">
                            </a>
                        </label>
                    </div>
                </div>

                {{-- Link Start --}}
                <div class="row">
                    <div class="ibox-title">
                        <label class="ibox-font-title">
                            ลิ้งค์น่าสนใจ
                        </label>
                    </div>
                    <div class="ibox-content">
                        <label>
                            <select style="margin-top: 5px; width: 100%;" name="" id="">
                                <option value="">หน่วยงานทางการศึกษา</option>
                            </select>
                        </label>
                        <label>
                            <select style="margin-top: 5px; width: 100%;" name="" id="">
                                <option value="">รวมลิ้งค์ สพป.</option>
                            </select>
                        </label>
                        <label>
                            <select style="margin-top: 5px; width: 100%;" name="" id="">
                                <option value="">รวมลิ้งค์ สพม.</option>
                            </select>
                        </label>
                        <label>
                            <select style="margin-top: 5px; width: 100%;" name="" id="">
                                <option value="">หนังสือพิมพ์</option>
                            </select>
                        </label>
                        <label>
                            <select style="margin-top: 5px; width: 100%;" name="" id="">
                                <option value="">หน่วยงานกรุงเทพมหานคร</option>
                            </select>
                        </label>
                    </div>
                </div>

                {{-- Affiliated School Start  --}}
                <div class="row">
                    <div class="ibox-title">
                        <label class="ibox-font-title">
                            โรงเรียนในสังกัด
                        </label>
                    </div>
                    <div class="ibox-content">
                        <label class="ibox-font-content">
                            <img src="" alt="">
                            <a href="">
                                โรงเรียนประภัสสรวิทยา
                            </a>
                        </label>
                        <label class="ibox-font-content">
                            <img src="" alt="">
                            <a href="">
                                โรงเรียนนาป่ามโนรถ
                            </a>
                        </label>
                        <label class="ibox-font-content">
                            <img src="" alt="">
                            <a href="">
                                โรงเรียนอนุบาลภักดีพรรณ
                            </a>
                        </label>
                        <label class="ibox-font-content">
                            <img src="" alt="">
                            <a href="">
                                โรงเรียนเมืองชลพิทยา
                            </a>
                        </label>
                        <label class="ibox-font-content">
                            <img src="" alt="">
                            <a href="">
                                โรงเรียนบ้านชากพุดซา
                            </a>
                        </label>
                        <label class="ibox-font-content">
                            <img src="" alt="">
                            <a href="">
                                โรงเรียนบ้านชากนา
                            </a>
                        </label>
                        <label class="ibox-font-content">
                            <img src="" alt="">
                            <a href="">
                                โรงเรียนบ้านหนองไผ่แก้ว
                            </a>
                        </label>
                        <label class="ibox-font-content">
                            <img src="" alt="">
                            <a href="">
                                โรงเรียนเพชรพิทยาคม
                            </a>
                        </label>
                        <label class="ibox-font-content">
                            <img src="" alt="">
                            <a href="">
                                โรงเรียนเฮงฮั้ว
                            </a>
                        </label>
                        <label class="ibox-font-content">
                            <img src="" alt="">
                            <a href="">
                                โรงเรียนอนุบาลวัดอู่ตะเภา(ตะเภาแก้ววิทยาคาร)
                            </a>
                        </label>
                    </div>
                </div>

                {{-- From Login Start --}}
                <div class="row">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                        {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                        {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}
                      </div>
                      <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                    </form>
                </div>

            </div>
        </div>
        {{-- Layout Right End --}}

    </div>

    {{-- Footer Start --}}
    <div class="row" style="margin-top: 30px; background-color: hsl(205deg 55% 49%);">
        <label class="text-center">
            <p style="color: #ffffff; margin-top: 20px;">โรงเรียนโพนบก</p>
            <p style="color: #ffffff; margin-top: 20px;">© Power by : จารุวรรณ ไซยสุระ.</p>
        </label>
    </div>
    {{-- Footer End --}}

</div>
@endsection
