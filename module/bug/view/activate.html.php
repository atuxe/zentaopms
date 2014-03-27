<?php
/**
 * The activate file of bug module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2013 青岛易软天创网络科技有限公司 (QingDao Nature Easy Soft Network Technology Co,LTD www.cnezsoft.com)
 * @license     LGPL (http://www.gnu.org/licenses/lgpl.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     bug
 * @version     $Id: activate.html.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<form method='post' enctype='multipart/form-data' target='hiddenwin'>
  <table class='table-1'>
    <caption><?php echo $bug->title;?></caption>
    <tr>
      <td><?php echo $lang->bug->assignedTo;?></td>
      <td><?php echo html::select('assignedTo', $users, $bug->resolvedBy, "class='form-control'");?></td>
    </tr>
    <tr>
      <td><?php echo $lang->bug->openedBuild;?></td>
      <td><?php echo html::select('openedBuild[]', $builds, $bug->openedBuild, 'size=4 multiple=multiple class=select-3');?></td>
    </tr>
    <tr>
      <td><?php echo $lang->comment;?></td>
      <td><?php echo html::textarea('comment', '', "rows='6' class='w-p98'");?></td>
    </tr>
    <tr>
      <th><?php echo $lang->bug->files;?></th>
      <td class='text-left'><?php echo $this->fetch('file', 'buildform');?></td>
    </tr>  
    <tr>
      <td colspan='2' class='text-center'><?php echo html::submitButton() . html::linkButton($lang->goback, $this->session->bugList);?></td>
    </tr>
  </table>
  <?php include '../../common/view/action.html.php';?>
</form>
<?php include '../../common/view/footer.html.php';?>
