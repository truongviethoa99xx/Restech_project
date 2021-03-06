<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{asset('css\bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css\style.css')}}" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-block padding-left-0">
                        <div class="row">
                            <div class="col-sm-12 col-xl-3 m-b-30">
                                <select id="select_meal" class="form-control form-control-primary">
                                    <option value="">Chọn món</option>
                                    <option value="1" data-menu-category="Món ăn" data-menu-price="100.000" data-menu-quantity="10" data-menu-discount="0">Bún bò</option>
                                    <option value="1" data-menu-category="Món ăn" data-menu-price="120.000" data-menu-quantity="10" data-menu-discount="0">Bún gà</option>
                                    <option value="1" data-menu-category="Món ăn" data-menu-price="130.000" data-menu-quantity="10" data-menu-discount="0">Bún heo</option>
                                    <option value="1" data-menu-category="Món ăn" data-menu-price="140.000" data-menu-quantity="10" data-menu-discount="0">Bún ngao</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-block table-border-style padding-left-edit">
                            <div class="table-responsive">
                                <table class="table table-styling">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>STT</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Discount</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                                <input size="5" name="" class="form-control quantity" />
                                            </td>
                                            <td>
                                                <select id="select_discount_type" class="form-control form-control-primary">
                                                    <option value="">Theo %</option>
                                                    <option value="1">Theo số tiền</option>
                                                </select>
                                                <input size="5" name="" class="form-control" />
                                            </td>
                                            <td>100</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header__group">
                                <span class="card-header__group-span">Tổng tiền:</span>
                                <span class="card-header__price-money">100.000 vnđ</span>
                            </div>
                            <div class="card-header__group">
                                <span class="card-header__group-span">Giảm giá:</span>
                                <div class="card-header__discout">
                                    <input id="only-number" type="text" class="form-control" placeholder="0"/>
                                </div>
                                <select id="select-percent" class="form-control card-header__group-select">
                                    <option value="vnd">VNĐ</option>
                                    <option value="percent">%</option>
                                </select>
                            </div>
                            <div class="card-header__group">
                                <span class="card-header__group-span">VAT:</span>
                                <div class="card-header__discout" id="card-header__discout">
                                    <input name="ccdate" type="text" id="only-number-VAT" class="form-control card-header__discout-input" placeholder="0"/>
                                </div>
                                <div class="card-header__group-check">
                                    <input class="border-checkbox__input-edit" type="checkbox" id="check-vat" />
                                    <label class="border-checkbox-label-edit" for="check-vat">VAT</label>
                                </div>
                            </div>
                            <div class="card-header__group">
                                <span class="card-header__group-span">Tổng cộng:</span>
                                <span class="card-header__price-money">100.000 vnđ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{asset('jquery\jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js\bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js\total.js')}}"></script>
        <script type="text/javascript" src="{{asset('jquery\app.js')}}"></script>
    </body>
</html>
