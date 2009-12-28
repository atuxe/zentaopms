<?php
/**
 * The create view of task module of ZenTaoMS.
 *
 * ZenTaoMS is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *                                                                             
 * ZenTaoMS is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public License
 * along with ZenTaoMS.  If not, see <http://www.gnu.org/licenses/>.  
 *
 * @copyright   Copyright: 2009 Chunsheng Wang
 * @author      Chunsheng Wang <wwccss@263.net>
 * @package     task
 * @version     $Id$
 * @link        http://www.zentao.cn
 */
?>
<?php include '../../common/header.html.php';?>
<div class='yui-d0'>
  <form method='post' target='hiddenwin'>
    <table align='center' class='table-1 a-left'> 
      <caption><?php echo $lang->task->create;?></caption>
      <tr>
        <th class='rowhead'><?php echo $lang->task->project;?></th>
        <td><?php echo $project->name;?></td>
      </tr>  
      <tr>
        <th class='rowhead'><?php echo $lang->task->story;?></th>
        <td><?php echo html::select('story', $stories, $storyID, 'class=select-1');?> 
      </tr>  
      <tr>
        <th class='rowhead'><?php echo $lang->task->name;?></th>
        <td><input type='text' name='name' id='name' class='text-1' /><?php echo html::commonButton($lang->task->copyStoryTitle, 'onclick=copyStoryTitle()');?></td>
      </tr>  
      <tr>
        <th class='rowhead'><?php echo $lang->task->desc;?></th>
        <td><textarea name='desc' rows='5' class='area-1'></textarea>
      </tr>  
      <tr>
        <th class='rowhead'><?php echo $lang->task->owner;?></th>
        <td><?php echo html::select('owner', $members, '', 'class=select-3');?> 
      </tr> 
      <tr>
        <th class='rowhead'><?php echo $lang->task->estimate;?></th>
        <td><input type='text' name='estimate' class='text-3' /></td>
      </tr>
      <tr>
        <th class='rowhead'><?php echo $lang->task->type;?></th>
        <td><?php echo html::select('type', $lang->task->typeList, '', 'class=select-3');?></td>
      </tr>
      <tr>
        <th class='rowhead'><?php echo $lang->task->status;?></th>
        <td><?php echo html::select('status', $lang->task->statusList, 'wait', 'class=select-3');?></td>
      </tr>
      <tr>
        <th class='rowhead'><?php echo $lang->task->pri;?></th>
        <td><?php echo html::select('pri', $lang->task->priList, '', 'class=select-3');?> 
      </tr>
      <tr>
        <th class='rowhead'><?php echo $lang->task->afterSubmit;?></th>
        <td><?php echo html::radio('after', $lang->task->afterChoices, 'continueAdding');?></td> 
      </tr>
      <tr>
        <td colspan='2' class='a-center'><?php echo html::submitButton() . html::resetButton();?></td>
      </tr>
    </table>
  </form>
</div>  
<script language='Javascript'>
function copyStoryTitle()
{
    var storyTitle = $('#story option:selected').text();
    storyTitle = storyTitle.substr(storyTitle.indexOf('/') + 1);
    $('#name').attr('value', storyTitle);
}
</script>
<?php include '../../common/footer.html.php';?>
