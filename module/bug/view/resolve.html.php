<?php
/**
 * The resolve file of bug module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2013 青岛易软天创网络科技有限公司 (QingDao Nature Easy Soft Network Technology Co,LTD www.cnezsoft.com)
 * @license     LGPL (http://www.gnu.org/licenses/lgpl.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     bug
 * @version     $Id: resolve.html.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<form class='form-condensed' method='post' target='hiddenwin'>
  <table class='table table-form'>
    <caption><?php echo $bug->title;?></caption>
    <tr>
      <td><?php echo $lang->bug->resolution;?></td>
      <td><?php unset($lang->bug->resolutionList['tostory']); echo html::select('resolution', $lang->bug->resolutionList, '', 'class=select-3 onchange=setDuplicate(this.value)');?></td>
    </tr>
    <tr id='duplicateBugBox' style='display:none'>
      <td><?php echo $lang->bug->duplicateBug;?></td>
      <td><?php echo html::input('duplicateBug', '', "class='form-control'");?></td>
    </tr>
    <tr>
      <td><?php echo $lang->bug->resolvedBuild;?></td>
      <td><?php echo html::select('resolvedBuild', $builds, '', "class='form-control'");?></td>
    </tr>
    <tr>
      <td><?php echo $lang->bug->resolvedDate;?></td>
      <td><?php echo html::input('resolvedDate', helper::now(), "class='form-control'");?></td>
    </tr>
    <tr>
      <td><?php echo $lang->bug->assignedTo;?></td>
      <td><?php echo html::select('assignedTo', $users, $bug->openedBy, "class='form-control chosen'");?></td>
    </tr>
    <tr>
      <td><?php echo $lang->comment;?></td>
      <td><?php echo html::textarea('comment', '', "rows='6' class='w-p98'");?></td>
    </tr>
    <tr>
      <td colspan='2' class='text-center'><?php echo html::submitButton() . html::linkButton($lang->goback, $this->session->bugList);?></td>
    </tr>
  </table>
  <?php include '../../common/view/action.html.php';?>
</form>
<?php include '../../common/view/footer.html.php';?>
