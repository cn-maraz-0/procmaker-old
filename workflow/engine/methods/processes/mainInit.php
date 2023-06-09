<?php
/**
 * main.php Cases List main processor
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.23
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * For more information, contact Colosa Inc, 2566 Le Jeune Rd.,
 * Coral Gables, FL, 33134, USA, or email info@colosa.com.
 */

//$oHeadPublisher = & headPublisher::getSingleton();
global $RBAC;
$RBAC->requirePermissions( 'PM_FACTORY' );

G::loadClass( 'configuration' );
$conf = new Configurations();

if (preg_match("/^([\d\.]+).*$/", System::getVersion(), $arrayMatch)) {
    $pmVersion = $arrayMatch[1];
} else {
    $pmVersion = ""; //Branch master
}

$arrayImportFileExtension = array("pm", "pmx", "bpmn");
$arrayMenuNewOption       = array("pm" => true, "bpmn" => true);

if ($pmVersion != "") {
    $arrayImportFileExtension = (version_compare($pmVersion . "", "3", ">="))? $arrayImportFileExtension : array("pm");
    $arrayMenuNewOption       = (version_compare($pmVersion . "", "3", ">="))? array("bpmn" => true) : array("pm" => true);
}

$oHeadPublisher->addExtJsScript( 'processes/main', true ); //adding a javascript file .js
$oHeadPublisher->addContent( 'processes/main' ); //adding a html file  .html.

$partnerFlag = (defined('PARTNER_FLAG')) ? PARTNER_FLAG : false;
$oHeadPublisher->assign( 'PARTNER_FLAG', $partnerFlag );
$oHeadPublisher->assign( 'pageSize', $conf->getEnvSetting( 'casesListRowNumber' ) );
$oHeadPublisher->assign("arrayImportFileExtension", $arrayImportFileExtension);
$oHeadPublisher->assign("arrayMenuNewOption", $arrayMenuNewOption);

G::RenderPage( 'publish', 'extJs' );
