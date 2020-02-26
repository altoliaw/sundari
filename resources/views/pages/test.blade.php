@extends('layouts.default')

@section('main')
<div class="container-fluid row fill">
    <div class="col-sm-12">        
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">新增合約</h3>
            </div>
            <div class="card-body">
                <form id="info" role="form">
                    <div class="row"> 
                        <div class="col-sm-1"><input type="submit" value="確認"  class="edit btn btn-block btn-secondary btn-xs swalDefaultSuccess"/></div>             
                        <div class="col-sm-1"><a href="javascript:void(0)" onclick="window.history.go(-1);" class="edit btn btn-block btn-secondary btn-xs">回上頁</a></div>
                        <div class="col-sm-10">&nbsp;</div>                
                    </div> 
                    <hr />
                    <div class="row"> 
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>合約人名/廠商</label>
                                <select class="form-control chosen" name="uid" >                
                                    <option value="1">吳偉豪</option>                                                        
                                    <option value="2">明凱</option>
                                    <option value="3">呂聖文</option>
                                    <option value="4">尹法堯</option>
                                </select>
                            </div>    
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>開始時間</label>
                                <input type="text" value="" name="start_date" class="form-control"/>
                            </div>    
                        </div>             
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>結束時間</label>
                                <input type="text" value="" name="end_date" class="form-control"/>
                            </div>    
                        </div>                                  
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>合約型態</label>
                                <div class="form-check" >
                                    <div  class="btn-group btn-group-toggle" data-toggle="buttons">            
                                        <label class="btn bg-olive active">
                                            <input type="radio" name="type" value="0" autocomplete="off" checked=""> 一般合約
                                        </label>
                                        <label class="btn bg-olive">
                                            <input type="radio" name="type" value="1" autocomplete="off" > 活動合約
                                        </label>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>可領取贈品數量</label>
                                <input type="text" value="" name="giveaway_balance" class="form-control"/>
                            </div>                            
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>合約餘額</label>
                                <input type="text" value="" name="money_balance" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>合約總額</label>
                                <input type="text" value="" name="contract_money" class="form-control"/>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>備註</label>
                                <input type="text" value="" name="note" class="form-control"/>
                            </div>                           
                        </div>
                        <div class="col-sm-4">&nbsp;
                        </div>
                    </div>
                    <hr />
                    <input name="_method" value="POST" hidden/>
                    <input name="updatedweblineuserid" value="112233" hidden/>
                </form>
                <div class="col-sm-12">
                    <div class="row">
                        <a href="javascript:inserttmp();" class="nav-link">
                            <i class="fas fa-plus"></i> 加入贈品                     
                        </a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="tpl_tmp" style="display:none" class="alert callout callout-info alert-dismissible">
    <button type="button" class="close" aria-hidden="true" onclick="deletetmp(this);">×</button>
<h6>贈品: 新增<input type="hidden" name="contracts_products[]" value="-1"></h6>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>贈品產品編號</label>
                <select class="form-control chosen" name="contracts_products_product_id[]" >                                                        
                    <option value="1">按摩棒</option>                                                        
                    <option value="2">跳蛋</option>
                    <option value="3">保險套</option>
                    <option value="4">束縛繩</option>            
                </select>
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-group">
                <label>個數</label>
                <input type="text" value="0" name="contracts_products_quantity[]" class="form-control" />
                <input type="hidden" name="actiontype[]" value="1" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-7">&nbsp;
        </div>
    </div>
</div><!--end-->

<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">
    function inserttmp(){
        
    }
</script>
@stop