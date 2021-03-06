<?php
/**
 * sysPass
 * 
 * @author nuxsmin
 * @link http://syspass.org
 * @copyright 2012 Rubén Domínguez nuxsmin@syspass.org
 *  
 * This file is part of sysPass.
 *
 * sysPass is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * sysPass is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with sysPass.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
 
 defined('APP_ROOT') || die(_('No es posible acceder directamente a este archivo'));

$activeTab = $data['active'];

?>

<div id="title" class="midroundup titleNormal">
    <?php echo _('Importar phpPMS'); ?>
</div>

<form METHOD="post" name="frmMigrate" id="frmMigrate">
    <table class="data round">
        <tr>
            <td class="descField">
                <?php echo _('Usuario BBDD'); ?>
                <?php SP_Common::printHelpButton("config", 0); ?>
            </td>
            <td class="valField">
                <input type="text" name="dbuser" value="" />
            </td>
        </tr>
        <tr>
            <td class="descField">
                <?php echo _('Clave BBDD'); ?>
            </td>
            <td class="valField">
                <input type="password" name="dbpass" value=""/>
            </td>
        </tr>	
        <tr>
            <td class="descField">
                <?php echo _('Nombre BBDD'); ?>
                <?php SP_Common::printHelpButton("config", 1); ?>
            </td>
            <td class="valField">
                <input type="text" name="dbname" value="phppms" />
            </td>
        </tr>
        <tr>
            <td class="descField">
                <?php echo _('Servidor BBDD'); ?>
                <?php SP_Common::printHelpButton("config", 2); ?>
            </td>
            <td class="valField">
                <input type="text" name="dbhost" value="localhost" />
            </td>
        </tr>
        <tr>
            <td class="descField">
                <?php echo _('Confirmar'); ?>
            </td>
            <td class="valField">
                <input type="checkbox" name="chkmigrate" class="checkbox" />
                <br>
                <img src="imgs/warning.png" ALT="<?php echo _('Atención'); ?>" class="iconMini" />
                <?php echo _('Los datos actuales serán borrados (excepto el usuario actual)'); ?>
            </td>
        </tr>
    </table>

	<input type="hidden" name="active" value="<?php echo $activeTab ?>" />
    <input type="hidden" name="action" value="migrate" />
    <input type="hidden" name="sk" value="<?php echo SP_Common::getSessionKey(TRUE); ?>">
</form>

<div class="action">
    <ul>
        <li>
            <img src="imgs/start.png" title="<?php echo _('Iniciar'); ?>" class="inputImg" OnClick="configMgmt('migrate');" />
        </li>
    </ul>
</div>