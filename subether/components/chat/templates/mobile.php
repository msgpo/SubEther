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
<div id="Messages" class="mobileview">
	<div class="Box">
		<!--<div id="Tabs">
			<ul id="MessagesMenu">
				<li<?= !$_REQUEST['view'] ? ' class="current"' : '' ?>>
					<a href="/en/home/messages/">
						<span>Chat</span>
					</a>
				</li>
				<li<?= $_REQUEST['view'] == 'mail' ? ' class="current"' : '' ?>>
					<a href="/en/home/messages/?view=mail">
						<span>Mail</span>
					</a>
				</li>
			</ul>
			<div style="clear:both" class="clearboth"></div>
		</div>-->
		<div id="MainIM"><?= $this->Contacts ?></div>
	</div>
</div>
<script> chatObject.openContactMessage(<?= ( $this->cid ? $this->cid : '' ) ?>); </script>
