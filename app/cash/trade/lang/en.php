<?php
/**
 * The trade module English file of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     trade
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
if(!isset($lang->trade)) $lang->trade = new stdclass();
$lang->trade->common      = 'Trade';
$lang->trade->id          = 'ID';
$lang->trade->depositor   = 'Despositor';
$lang->trade->type        = 'Type';
$lang->trade->currency    = 'Currency';
$lang->trade->trader      = 'Provider';
$lang->trade->customer    = 'Cusotmer';
$lang->trade->money       = 'Money';
$lang->trade->status      = 'Status';
$lang->trade->rate        = 'ROI';
$lang->trade->desc        = 'Desc';
$lang->trade->product     = 'Product';
$lang->trade->order       = 'Order';
$lang->trade->contract    = 'Contract';
$lang->trade->category    = 'Category';
$lang->trade->date        = 'Date';
$lang->trade->handlers    = 'Handler';
$lang->trade->dept        = 'Dept';
$lang->trade->receipt     = 'From';
$lang->trade->payment     = 'To';
$lang->trade->fee         = 'Fee';
$lang->trade->transferIn  = 'Amount';
$lang->trade->transferOut = 'Amount';
$lang->trade->schema      = 'Schema';
$lang->trade->importFile  = 'Import file';
$lang->trade->encode      = 'Encode';
$lang->trade->createdBy   = 'Created By';
$lang->trade->createdDate = 'Created Date';
$lang->trade->editedBy    = 'Edited By';
$lang->trade->editedDate  = 'Edited Date';
$lang->trade->month       = 'Month';
$lang->trade->uploadFile  = 'Upload File';
$lang->trade->productLine = 'Product Line';
$lang->trade->area        = 'Customer Area';
$lang->trade->industry    = 'Customer Industry';
$lang->trade->level       = 'Customer Level';
$lang->trade->size        = 'Customer Size';
$lang->trade->interest    = 'Loan Interest';
$lang->trade->loanID      = 'Loan';
$lang->trade->investID    = 'Invest';
$lang->trade->loanrate    = 'Interest Rate';

$lang->trade->create       = 'Create Trade';
$lang->trade->in           = 'Income';
$lang->trade->out          = 'Expend';
$lang->trade->invest       = 'Invest';
$lang->trade->redeem       = 'Redeem';
$lang->trade->loan         = 'Loan';
$lang->trade->repay        = 'Repay';
$lang->trade->createIn     = 'Income';
$lang->trade->createOut    = 'Expend';
$lang->trade->transfer     = 'Transfer';
$lang->trade->edit         = 'Edit Trade';
$lang->trade->detail       = 'Detail';
$lang->trade->view         = 'View';
$lang->trade->browse       = 'Bills';
$lang->trade->delete       = 'Delete Trade';
$lang->trade->batchCreate  = 'Batch Create';
$lang->trade->batchEdit    = 'Batch Edit';
$lang->trade->newTrader    = 'Create Trader';
$lang->trade->import       = 'Import';
$lang->trade->export       = 'Export';
$lang->trade->showImport   = 'Show result';
$lang->trade->fullYear     = 'Full year';
$lang->trade->quarter      = 'Quarter';
$lang->trade->export2Excel = 'Export Excel';
$lang->trade->compare      = 'Annual Compare';

$lang->trade->report = new stdclass();
$lang->trade->report->common      = 'Report'; 
$lang->trade->report->annual      = 'Annual Report'; 
$lang->trade->report->compare     = 'Annual Compare';
$lang->trade->report->create      = 'Create Report';
$lang->trade->report->selectYears = 'Select Years';
$lang->trade->report->undefined   = 'Undefined';
$lang->trade->report->compareTip  = 'Select 2 years to compare.';
$lang->trade->report->unit        = 'K';
$lang->trade->report->ratio       = 1000;

$lang->trade->report->typeList['annual']  = 'Annual balance report'; 
$lang->trade->report->typeList['compare'] = 'Annual comparison report'; 

$lang->trade->typeList['in']          = 'Income';
$lang->trade->typeList['out']         = 'Expend';
$lang->trade->typeList['transferout'] = 'Transfer out';
$lang->trade->typeList['transferin']  = 'Transfer in';
$lang->trade->typeList['invest']      = 'Invest';
$lang->trade->typeList['redeem']      = 'Redeem';
$lang->trade->typeList['loan']        = 'Loan';
$lang->trade->typeList['repay']       = 'Repay';

$lang->trade->quarters = new stdclass();
$lang->trade->quarters->Q4 = '10,11,12';
$lang->trade->quarters->Q3 = '07,08,09';
$lang->trade->quarters->Q2 = '04,05,06';
$lang->trade->quarters->Q1 = '01,02,03';

$lang->trade->quarterList['Q1'] = 'First quarter';
$lang->trade->quarterList['Q2'] = 'Second quarter';
$lang->trade->quarterList['Q3'] = 'Third quarter';
$lang->trade->quarterList['Q4'] = 'Fourth quarter';

$lang->trade->monthList['last']  = 'Last Year';
$lang->trade->monthList['01']    = 'January';
$lang->trade->monthList['02']    = 'February';
$lang->trade->monthList['03']    = 'March';
$lang->trade->monthList['04']    = 'April';
$lang->trade->monthList['05']    = 'May';
$lang->trade->monthList['06']    = 'June';
$lang->trade->monthList['07']    = 'July';
$lang->trade->monthList['08']    = 'August';
$lang->trade->monthList['09']    = 'September';
$lang->trade->monthList['10']    = 'October';
$lang->trade->monthList['11']    = 'November';
$lang->trade->monthList['12']    = 'December';
$lang->trade->monthList['total'] = 'Total';

$lang->trade->categoryList['transferin']  = 'Transfer In';
$lang->trade->categoryList['transferout'] = 'Transfer Out';
$lang->trade->categoryList['invest']      = 'Invest';
$lang->trade->categoryList['redeem']      = 'Redeem';
$lang->trade->categoryList['loan']        = 'Loan';
$lang->trade->categoryList['repay']       = 'Repay';

$lang->trade->transferCategoryList['transferin']  = 'Transfer In';
$lang->trade->transferCategoryList['transferout'] = 'Transfer Out';

$lang->trade->objectTypeList['customer'] = 'Customer';
$lang->trade->objectTypeList['order']    = 'Order';
$lang->trade->objectTypeList['contract'] = 'Contract';

$lang->trade->investTypeList['invest'] = 'Invest';
$lang->trade->investTypeList['redeem'] = 'Redeem';

$lang->trade->loanTypeList['loan']  = 'Loan';
$lang->trade->loanTypeList['repay'] = 'Repay';

$lang->trade->encodeList['gbk']  = 'GBK';
$lang->trade->encodeList['utf8'] = 'UTF-8';

$lang->trade->notEqual = 'The two depositor can not be the same!';
$lang->trade->feeDesc  = '%s from %s to %s';
$lang->trade->fileNode = 'The format of file is csv';

$lang->trade->importedFields = array();
$lang->trade->importedFields['category'] = 'Category';
$lang->trade->importedFields['type']     = 'Type';
$lang->trade->importedFields['trader']   = 'Trader';
$lang->trade->importedFields['in']       = 'Income';
$lang->trade->importedFields['out']      = 'Expend';
$lang->trade->importedFields['date']     = 'Date';
$lang->trade->importedFields['category'] = 'Category';
$lang->trade->importedFields['dept']     = 'Department';
$lang->trade->importedFields['desc']     = 'Desc';
$lang->trade->importedFields['fee']      = 'Fee';
$lang->trade->importedFields['product']  = 'Product';

$lang->trade->statusList['returned']   = 'Returned';
$lang->trade->statusList['returning']  = 'Returning';
$lang->trade->statusList['unReturned'] = 'Unreturned';
$lang->trade->statusList['repaied']    = 'Repaied';
$lang->trade->statusList['repaying']   = 'Repaying';
$lang->trade->statusList['unRepaied']  = 'Unrepaied';

$lang->trade->totalIn       = '%s: income %s;';
$lang->trade->totalOut      = '%s: expend %s;';
$lang->trade->totalAmount   = '%s: income %s, expend %s, %s;';
$lang->trade->totalInvest   = '%s: invest %s, redeem %s,unredeem %s, %s;';
$lang->trade->profit        = 'profit';
$lang->trade->loss          = 'loss';
$lang->trade->balance       = 'Income is equal to expenditure';
$lang->trade->total         = 'Total';

$lang->trade->noTraderMatch = 'No matched trader，click to create';
$lang->trade->unique        = 'There has been same record';
$lang->trade->ignore        = 'Ignore';

$lang->trade->chartList['category']    = 'statistic according to category';
$lang->trade->chartList['dept']        = 'statistic according to department';
$lang->trade->chartList['area']        = 'statistic according to customer area';
$lang->trade->chartList['industry']    = 'statistic according to customer industry';
$lang->trade->chartList['level']       = 'statistic according to customer level';
$lang->trade->chartList['size']        = 'statistic according to customer size';
$lang->trade->chartList['productLine'] = 'statistic according to product line';

$lang->trade->excel = new stdclass();
$lang->trade->excel->title = new stdclass();
$lang->trade->excel->title->depositor = ' Depositor Profit and Loss';

$lang->trade->excel->help = new stdclass();
$lang->trade->excel->help->depositor = "This report don't differentiate currencies.";
