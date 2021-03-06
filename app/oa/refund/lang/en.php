<?php
if(!isset($lang->refund)) $lang->refund = new stdclass();
$lang->refund->common       = 'Reimbursement';
$lang->refund->create       = 'Create';
$lang->refund->browse       = 'Browse List';
$lang->refund->personal     = 'My Reimbursement';
$lang->refund->company      = 'All Reimbursement';
$lang->refund->todo         = 'Waiting For Reimbursement';
$lang->refund->browseReview = 'Browse review';
$lang->refund->edit         = 'Edit reimbursement';
$lang->refund->view         = 'View';
$lang->refund->delete       = 'Delete';
$lang->refund->review       = 'Review';
$lang->refund->detail       = 'Detail';
$lang->refund->reimburse    = 'Reimburse';
$lang->refund->cancel       = 'Cancel';
$lang->refund->commit       = 'Commit';
$lang->refund->settings     = 'Settings';
$lang->refund->setReviewer  = 'Set Reviewer';
$lang->refund->setCategory  = 'Set Category';
$lang->refund->setDepositor = 'Set Depositor';
$lang->refund->setRefundBy  = 'Set RefundBy';
$lang->refund->export       = 'Export';

$lang->refund->id               = 'ID';
$lang->refund->name             = 'Name';
$lang->refund->category         = 'Category';
$lang->refund->date             = 'Date';
$lang->refund->money            = 'Money';
$lang->refund->reviewMoney      = 'Reimbursement Amount';
$lang->refund->currency         = 'Currency';
$lang->refund->desc             = 'Description';
$lang->refund->files            = 'Files';
$lang->refund->status           = 'Status';
$lang->refund->createdBy        = 'Created By';
$lang->refund->createdDate      = 'Created Date';
$lang->refund->editedBy         = 'Edited By';
$lang->refund->editedDate       = 'Edited Date';
$lang->refund->firstReviewer    = 'First reviewer';
$lang->refund->firstReviewDate  = 'First review Date';
$lang->refund->secondReviewer   = 'Second reviewer';
$lang->refund->secondReviewDate = 'Second review Date';
$lang->refund->refundBy         = 'Reimbursed By';
$lang->refund->refundDate       = 'Reimbursec Date';
$lang->refund->baseInfo         = 'Base Info';
$lang->refund->reason           = 'Reason';
$lang->refund->reviewer         = 'Reviewer';
$lang->refund->related          = 'Related';
$lang->refund->depositor        = 'Depositor';

$lang->refund->statusList['draft']  = 'Draft';
$lang->refund->statusList['wait']   = 'Wait';
$lang->refund->statusList['doing']  = 'Doing';
$lang->refund->statusList['pass']   = 'Pass';
$lang->refund->statusList['reject'] = 'Reject';
$lang->refund->statusList['finish'] = 'Finish';

$lang->refund->reviewStatusList['pass']   = 'Pass';
$lang->refund->reviewStatusList['reject'] = 'Reject';

$lang->refund->reviewAllStatusList['allpass']   = 'All Pass';
$lang->refund->reviewAllStatusList['allreject'] = 'All Reject';

$lang->refund->descTip = "%s apply %s.";

$lang->refund->uniqueReviewer    = 'The first reviewer and the second reviewer can not be the same.';
$lang->refund->createTradeTip    = 'Do you record expense for this reimbursement?';
$lang->refund->secondReviewerTip = 'If reimbursement requires two approvals, please set this.';
$lang->refund->correctMoney      = 'Approval amount can not be more than the application amount.';
$lang->refund->categoryTips      = 'Not yet set up the expense category.';
$lang->refund->setExpense        = 'Go to set.';
$lang->refund->moneyTip          = 'If money of refund is less than this, reviewed once, but money of refund is more than this, reviewed twice.';
$lang->refund->total             = 'Refund total:';
$lang->refund->totalMoney        = '%s%s；';

$lang->refund->settings = new stdclass();
$lang->refund->settings->setReviewer  = "Reviewer|refund|setreviewer";
$lang->refund->settings->setCategory  = "Category|refund|setcategory";
$lang->refund->settings->setDepositor = "Depositor|refund|setdepositor";
$lang->refund->settings->setRefundBy  = "RefundBy|refund|setrefundby";
