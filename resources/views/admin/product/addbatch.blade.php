@extends('layout.defaultadmin')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>General Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">General</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row addpd">
                <div class="col-lg-6">

                    <form accept-charset="utf-8" action="{{ url("admin/product") }}" role="form" method="POST" enctype="multipart/form-data">
                        {{ method_field('POST') }}
                        @csrf

                        <div class="form-group">
                            <label>Cost price</label>
                            <input required name="prd_cost_price" type="number" min="0" class="form-control">
                            @if ($errors->has('prd_cost_price'))
                                <p class="text-danger">
                                    @foreach ($errors->get('prd_cost_price') as $e)
                                        {{ $e }}
                                    @endforeach
                                </p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Nature:</label>
                            @if ($errors->has('prd_size'))
                                <p class="text-danger">
                                    @foreach ($errors->get('prd_size') as $e)
                                        {{ $e }}
                                    @endforeach
                                </p>
                            @endif
                            @if ($errors->has('prd_color'))
                                <p class="text-danger">
                                    @foreach ($errors->get('prd_color') as $e)
                                        {{ $e }}
                                    @endforeach
                                </p>
                            @endif
                            @if ($errors->has('prd_amount'))
                                <p class="text-danger">
                                    @foreach ($errors->get('prd_amount') as $e)
                                        {{ $e }}
                                    @endforeach
                                </p>
                            @endif
                            <table class="table" id="my-table">
                                <tbody>
                                <tr>
                                    <th>Size</th>
                                    <td><input required name="prd_size[]" type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Color</th>
                                    <td><input required name="prd_color[]" type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Amount</th>
                                    <td><input required min="0" name="prd_amount[]" type="number" class="form-control"></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="form-group">
                            <table class="table" id="my-table-1">
                                <tbody>
                                <tr>

                                </tr>
                                <tr>

                                </tr>
                                <tr>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <table class="table" id="my-table-2">
                                <tbody>
                                <tr>

                                </tr>
                                <tr>

                                </tr>
                                <tr>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <input type="button" value="Add column" onclick="javascript:appendColumn()" class="append_column"/><br />
                            <input type="button" value="Delete columns" onclick="javascript:deleteColumns()" class="delete"/><br />
                        </div>
                        <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                    </form>
                </div>

{{--                <div class="col-lg-6">--}}

{{--                </div>--}}
            </div>
        </section>
        <script language="JavaScript" type="text/javascript">
            var flagname = 1;

            function appendColumn(){
                var tbl=document.getElementById('my-table');
                var tbl1=document.getElementById('my-table-1');
                var tbl2=document.getElementById('my-table-2');
                if (flagname < 4) {
                    for(var i=0;i<tbl.rows.length;i++){

                        if (i==0) {
                            createCell(tbl.rows[i].insertCell(tbl.rows[i].cells.length),'prd_size[]','form-control','text');
                        }
                        if (i==1) {
                            createCell(tbl.rows[i].insertCell(tbl.rows[i].cells.length),'prd_color[]','form-control','text');
                        }
                        if (i==2) {
                            createCell(tbl.rows[i].insertCell(tbl.rows[i].cells.length),'prd_amount[]','form-control','number');
                        }
                    }
                }
                if(flagname >= 4 && flagname <=8) {
                    for(var i=0;i<tbl1.rows.length;i++){

                        if (i==0) {
                            createCell(tbl1.rows[i].insertCell(tbl1.rows[i].cells.length),'prd_size[]','form-control','text');
                        }
                        if (i==1) {
                            createCell(tbl1.rows[i].insertCell(tbl1.rows[i].cells.length),'prd_color[]','form-control','text');
                        }
                        if (i==2) {
                            createCell(tbl1.rows[i].insertCell(tbl1.rows[i].cells.length),'prd_amount[]','form-control','number');
                        }
                    }
                }
                if(flagname >= 9 && flagname <=13) {
                    for(var i=0;i<tbl2.rows.length;i++){

                        if (i==0) {
                            createCell(tbl2.rows[i].insertCell(tbl2.rows[i].cells.length),'prd_size[]','form-control','text');
                        }
                        if (i==1) {
                            createCell(tbl2.rows[i].insertCell(tbl2.rows[i].cells.length),'prd_color[]','form-control','text');
                        }
                        if (i==2) {
                            createCell(tbl2.rows[i].insertCell(tbl2.rows[i].cells.length),'prd_amount[]','form-control','number');
                        }
                    }
                }

                flagname++;

            }

            function createCell(cell,name,style,type){
                var div=document.createElement('input');
                div.setAttribute('required','');
                div.setAttribute('name',name);
                div.setAttribute('type',type);
                div.setAttribute('class',style);
                div.setAttribute('min',0);
                div.setAttribute('className',style);
                cell.appendChild(div);
            }

            // delete table columns with index greater then 0
            function deleteColumns() {
                var tbl = document.getElementById('my-table'), // table reference
                    lastCol = tbl.rows[0].cells.length - 1,    // set the last column index
                    i, j;
                var tbl1 = document.getElementById('my-table-1'), // table reference
                    lastCol1 = tbl1.rows[0].cells.length - 1,    // set the last column index
                    a, b;
                var tbl2 = document.getElementById('my-table-2'), // table reference
                    lastCol2 = tbl2.rows[0].cells.length - 1,    // set the last column index
                    c, d;
                // delete cells with index greater then 0 (for each row)
                for (i = 0; i < tbl.rows.length; i++) {
                    for (j = lastCol; j > 1; j--) {
                        tbl.rows[i].deleteCell(j);
                    }
                }
                for (a = 0; a < tbl1.rows.length; a++) {
                    for (b = lastCol1; b >= 0; b--) {
                        tbl1.rows[a].deleteCell(b);
                    }
                }
                for (c = 0; c < tbl2.rows.length; c++) {
                    for (d = lastCol2; d >= 0; d--) {
                        tbl2.rows[c].deleteCell(d);
                    }
                }
                flagname = 1;
            }
        </script>

    </main>
@endsection
