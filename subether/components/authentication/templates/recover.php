<? /*******************************************************************************
*   SubEther, The Decentralized Network.                                       *
*   Copyright (C) 2012 Friend Studios AS                                       *
*                                                                              *
*   This program is free software: you can redistribute it and/or modify       *
*   it under the terms of the GNU Affero General Public License as             *
*   published by the Free Software Foundation, either version 3 of the         *
*   License, or (at your option) any later version.                            *
*                                                                              *
*   This program is distributed in the hope that it will be useful,            *
*   but WITHOUT ANY WARRANTY; without even the implied warranty of             *
*   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the              *
*   GNU Affero General Public License for more details.                        *
*                                                                              *
*   You should have received a copy of the GNU Affero General Public License   *
*   along with this program.  If not, see <https://www.gnu.org/licenses/>.     *
*******************************************************************************/ ?>
<div id="recover">
    <div class="head">
        <h1><?= i18n( 'i18n_Account Recovery' ) ?></h1>
    </div>
    <div class="content">
        <table>
                <tr>
                    <td><div><?= i18n( 'i18n_Email' ) ?></div></td>
                </tr>
                <tr>
                    <td><input id="AccountInfo" type="text"/></td>
                </tr>
        </table>
    </div>
    <div class="bottom">
        <div class="buttons">
            <button class="submit" onclick="recoverAccount()"><span><?= i18n( 'i18n_Recover' ) ?></span></button>
            <button class="cancel" onclick="closeWindow()"><span><?= i18n( 'i18n_Cancel' ) ?></span></button>
        </div>
    </div>
</div>
