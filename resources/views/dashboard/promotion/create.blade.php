@extends('dashboard.layout.master')

@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm khuyến mãi</h4>
                        <form action="https://1368iii.com/admin/promotion" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="AdFHLraKN7UzRtY1F2bvMjYhmnc2TfvtVMKFN7ZG">
                            <div class="form-group">
                                <label for="title">Tiêu đề</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Tiêu đề" required>
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Tiêu đề phụ</label>
                                <input type="text" name="subtitle" class="form-control" id="subtitle"
                                    placeholder="Tiêu đề phụ" required>
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Nội dung</label><br>
                                <textarea style="background-color: #2A3038;color: #fff;width:100%" name="content" rows="10" id="my-editor"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Nội dung Mobile</label><br>
                                <textarea style="background-color: #2A3038;color: #fff;width:100%" name="content_mb" rows="10" id="my-editor"></textarea>
                            </div>
                            <input type="hidden" name="content" value="Trống" />
                            <input type="hidden" name="content_mb" value="Trống" />
                            <input type="hidden" name="title" value="Trống" />
                            <input type="hidden" name="subtitle" value="Trống" />
                            <input type="hidden" name="locale" value="vi" />
                            <div class="form-group">
                                <label for="max_receipt">Số lần nhận tối đa</label>
                                <input type="number" name="max_receipt" class="form-control" id="max_receipt"
                                    placeholder="Số lần nhận tối đa" required>
                            </div>
                            <div class="form-group">
                                <label for="min_money">Số tiền tối thiểu</label>
                                <input type="text" name="min_money" class="form-control" id="min_money"
                                    placeholder="Số tiền tối thiểu" required>
                            </div>
                            <div class="form-group">
                                <label for="max_promotion">Số tiền tối đa</label>
                                <input type="text" name="max_promotion" class="form-control" id="max_promotion"
                                    placeholder="Số tiền tối đa" required>
                            </div>
                            <div class="form-group">
                                <label for="percent">Phần trăm</label>
                                <input type="text" name="percent" class="form-control" id="percent"
                                    placeholder="Phần trăm" required>
                            </div>
                            <div class="form-group">
                                <label for="bet">Vòng cược</label>
                                <input type="text" name="bet" class="form-control" id="bet"
                                    placeholder="Vòng cược" required>
                            </div>
                            <div class="form-group">
                                <label for="order">Trình tự</label>
                                <input type="text" name="order" class="form-control" id="order"
                                    placeholder="Trình tự" required>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Danh mục</label>
                                <select class="form-control" name="category_id" id="category_id" required>
                                    <option value="">-- Chọn --</option>
                                    <option value="1">CASINO</option>
                                    <option value="2">THỂ THAO</option>
                                    <option value="3">NỔ HŨ</option>
                                    <option value="4">E-SPORT</option>
                                    <option value="5">XỔ SỐ</option>
                                    <option value="6">BẮN CÁ</option>
                                    <option value="7">ĐÁ GÀ</option>
                                    <option value="9">GAME BÀI</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select class="form-control" name="status" id="status" required>
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Vô hiệu hóa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Thời gian bắt đâu</label>
                                <input type="text" name="time_start" id="datepicker" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Thời gian kết thúc</label>
                                <input type="text" name="time_end" id="datepicker1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Hình ảnh</label>
                                <input type="file" name="image" id="image" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Tạo mới</button>
                        </form>
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
@endsection
