@extends('dashboard.layout.master')

@section('main')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Khuyến mại</h4>
                            <a href="/promotion/create" class="btn btn-success p-2 px-5 mb-3">Thêm
                                mới</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tiêu đề</th>
                                            <th>Số lần nhận tối đa</th>
                                            <th>Số lần tiền thiểu</th>
                                            <th>Số tiền tối đa</th>
                                            <th>Phần trăm</th>
                                            <th>Vòng cược</th>
                                            <th>Trình tự</th>
                                            <th>Trạng thái</th>
                                            <th>Thời gian bắt đâu</th>
                                            <th>Thời gian kết thúc</th>
                                            <th>Ngày tạo</th>
                                            <th>Tác vụ</th>
                                        </tr>
                                    </thead>
                                    <tbody id="content-body">
                                        <tr>
                                            <td>1</td>
                                            <td>THƯỞNG SINH NHẬT 688,000 VNĐ</td>
                                            <td>1</td>
                                            <td>999,999,999</td>
                                            <td>99999999999</td>
                                            <td>69</td>
                                            <td>5</td>
                                            <td>9</td>
                                            <td>Hoạt động</td>
                                            <td>01-12-2022</td>
                                            <td>31-12-2023</td>
                                            <td>2022-12-01 13:47:45</td>
                                            <td class="d-flex" style="gap: 10px">
                                                <a href="https://1368iii.com/admin/promotion/47/edit"
                                                    class="btn-success px-3"
                                                    style="border-radius:5px;display:flex;align-items: center;">Sửa</a>
                                                <a href="https://1368iii.com/admin/promotion/47/edit?locale=th"
                                                    class="btn-success px-3"
                                                    style="border-radius:5px;display:flex;align-items: center;">th</a>
                                                <a href="https://1368iii.com/admin/promotion/47/edit?locale=vi"
                                                    class="btn-success px-3"
                                                    style="border-radius:5px;display:flex;align-items: center;">vi</a>
                                                <form action="https://1368iii.com/admin/promotion/47" method="POST">
                                                    <input type="hidden" name="_token"
                                                        value="bZaLqCQlVReQKz3ogxzYGR316RSRvPrm8Ld7MQ4R"> <input
                                                        name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between"
                style="justify-content: end !important;">
                <span style="    color: gold !important;"
                    class="text-muted d-block text-center text-sm-left d-sm-inline-block"></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
@endsection

@section('js')
@endsection
