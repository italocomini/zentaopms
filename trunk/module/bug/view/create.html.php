<?php
/**
 * The create view of bug module of ZenTaoMS.
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
 * @package     bug
 * @version     $Id$
 * @link        http://www.zentao.cn
 */
?>
<?php include '../../common/header.html.php';?>
<script language='Javascript'>
function loadModuleMenu(productID)
{
    link = createLink('tree', 'ajaxGetOptionMenu', 'productID=' + productID + '&viewtype=bug');
    $('#moduleIdBox').load(link);
}

</script>
<div class='yui-doc3'>
  <form method='post' target='hiddenwin'>
    <table align='center' class='table-1'> 
      <caption><?php echo $lang->bug->create;?></caption>
      <tr>
        <th class='rowhead'><?php echo $lang->bug->labProductAndModule;?></th>
        <td class='a-left'>
          <?php echo html::select('productID', $products, $productID, "onchange=loadModuleMenu(this.value); class='select-2'");?>
          <span id='moduleIdBox'><?php echo html::select('moduleID', $moduleOptionMenu, $currentModuleID, 'class=select-3');?></span>
        </td>
      </tr>  
      <!--
      <tr>
        <th class='rowhead'><?php echo $lang->bug->labStory;?></th>
        <td class='a-left'>
        </td>
      </tr>  
      <tr>
        <th class='rowhead'><?php echo $lang->bug->labProjectAndTask;?></th>
        <td class='a-left'>
        </td>
      </tr>
      <tr>
        <th class='rowhead'><?php echo $lang->bug->labBuild;?></th>
        <td class='a-left'>
        </td>
      </tr>-->
      <tr>
        <th class='rowhead'><?php echo $lang->bug->labTypeAndSeverity;?></th>
        <td class='a-left'>
          <?php echo html::select('type', (array)$lang->bug->typeList, '', 'class=select-2');?>
          <?php echo html::select('severity', (array)$lang->bug->severityList, '', 'class=select-2');?>
        </td>
      </tr>  
      <tr>
        <th class='rowhead'><nobr><?php echo $lang->bug->labSystemBrowserAndHardware;?></nobr></th>
        <td class='a-left'>
          <?php echo html::select('os', (array)$lang->bug->osList, '', 'class=select-2');?>
          <?php echo html::select('browser', (array)$lang->bug->browserList, '', 'class=select-2');?>
        </td>
      </tr>  
      <tr>
        <th class='rowhead'><nobr><?php echo $lang->bug->labAssignAndMail;?></nobr></th>
        <td class='a-left'>
          <?php echo html::select('assignedTo', $users, '', 'class=select-2');?>
          <?php echo html::select('mailTo', $users, '', 'class=select-2');?>
        </td>
      </tr>  
      <tr>
        <th class='rowhead'><?php echo $lang->bug->title;?></th>
        <td class='a-left'><input type='text' name='title' class='text-1' /></td>
      </tr>  
      <tr>
        <th class='rowhead'><?php echo $lang->bug->steps;?></th>
        <td class='a-left'><textarea name='steps' class='area-1' rows='8'></textarea></td>
      </tr>  
      <tr>
        <td colspan='2'>
          <?php echo html::submitButton() . html::resetButton();?>
        </td>
      </tr>
    </table>
  </form>
</div>
<?php include '../../common/footer.html.php';?>
