<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>
                        <?= $title ?>
                    </b>
                </a></li>

        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm <?= !empty($btn1) ? 'btn-addd' : null ?>"
                                href="<?= BASE_URL_ADMIN ?>?act=oders&status=1" title="List">
                                <span>Đơn chờ xác nhận</span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm <?= !empty($btn2) ? 'btn-addd' : null ?>"
                                href="<?= BASE_URL_ADMIN ?>?act=oders&status=2" title="List">
                                <span>Đơn chờ lấy hàng</span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm <?= !empty($btn3) ? 'btn-addd' : null ?>"
                                href="<?= BASE_URL_ADMIN ?>?act=oders&status=3" title="List">
                                <span>Đơn chờ giao hàng</span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm <?= !empty($btn4) ? 'btn-addd' : null ?>"
                                href="<?= BASE_URL_ADMIN ?>?act=oders&status=4" title="List">
                                <span>Đơn đã giao</span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm <?= !empty($btn0) ? 'btn-addd' : null ?>"
                                href="<?= BASE_URL_ADMIN ?>?act=oders&status=0" title="List">
                                <span>Đơn đã hủy</span>
                            </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>ID Bill</th>
                                <th>Khách hàng</th>
                                <th>Đơn hàng</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th>Tình trạng</th>
                                <th>Tính năng</th>
                            </tr>
                        </thead>
                        <?php require_once PATH_VIEW_ADMIN . 'order/tablebody/' . $viewtable . '.php'; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>