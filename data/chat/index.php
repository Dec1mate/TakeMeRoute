<?php
session_start();
include('header.php');
?>
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    <link href="css/style.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/chat.js"></script>
    <style>
        .modal-dialog {
            width: 400px;
            margin: 30px auto;
        }
    </style>
    <div class="container">
        <?php if (isset($_SESSION['username'])) { ?>
        <div class="row align-items-center">
            <?php include "headerRegistered.php"; ?>
        </div>
        <div class="row">
            <div class="col-11 mt-4 offset-1">
                <div id="frame">
                    <div id="sidepanel">
                        <div id="profile">
                            <?php
                            include('Chat.php');
                            $chat = new Chat();
                            $loggedUser = $chat->getUserDetails($_SESSION['username']);
                            echo '<div class="wrap">';
                            $currentSession = '';
                            foreach ($loggedUser as $user) {
                                $currentSession = $user['current_session'];
                                echo '<img id="profile-img" src="userpics/' . $user['avatar'] . '" class="online" alt="" />';
                                echo '<p>' . $user['username'] . '</p>';
                                echo '<div id="status-options">';
                                echo '<ul>';
                                echo '<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>';
                                echo '<li id="status-away"><span class="status-circle"></span> <p>Ausente</p></li>';
                                echo '<li id="status-busy"><span class="status-circle"></span> <p>Ocupado</p></li>';
                                echo '<li id="status-offline"><span class="status-circle"></span> <p>Desconectado</p></li>';
                                echo '</ul>';
                                echo '</div>';

                            }
                            echo '</div>';
                            ?>
                        </div>
                        <div id="contacts">
                            <?php
                            echo '<ul>';
                            $chatUsers = $chat->chatUsers($_SESSION['username']);
                            foreach ($chatUsers as $user) {
                                $status = 'offline';
                                if ($user['online']) {
                                    $status = 'online';
                                }
                                $activeUser = '';
                                if ($user['userid'] == $currentSession) {
                                    $activeUser = "active";
                                }
                                echo '<li id="' . $user['userid'] . '" class="contact ' . $activeUser . '" data-touserid="' . $user['userid'] . '" data-tousername="' . $user['username'] . '">';
                                echo '<div class="wrap">';
                                echo '<span id="status_' . $user['userid'] . '" class="contact-status ' . $status . '"></span>';
                                echo '<img src="userpics/' . $user['avatar'] . '" alt="" />';
                                echo '<div class="meta">';
                                echo '<p class="name">' . $user['username'] . '<span id="unread_' . $user['userid'] . '" class="unread">' . $chat->getUnreadMessageCount($user['userid'], $_SESSION['username']) . '</span></p>';
                                echo '<p class="preview"><span id="isTyping_' . $user['userid'] . '" class="isTyping"></span></p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</li>';
                            }
                            echo '</ul>';
                            ?>
                        </div>
                        <div id="bottom-bar">
                            <a href="logout.php">
                                <button id="logoff" style="width: 100%" ><i aria-hidden="true"></i>
                                    <span>Salir</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="content" id="content">
                        <div class="contact-profile" id="userSection">
                            <?php
                            $userDetails = $chat->getUserDetails($currentSession);
                            foreach ($userDetails as $user) {
                                echo '<img src="userpics/' . $user['avatar'] . '" alt="" />';
                                echo '<p>' . $user['username'] . '</p>';

                            }
                            ?>
                        </div>
                        <div class="messages" id="conversation">
                            <?php
                            echo $chat->getUserChat($_SESSION['username'], $currentSession);
                            ?>
                        </div>
                        <div class="message-input" id="replySection">
                            <div class="message-input" id="replyContainer">
                                <div class="wrap">
                                    <input type="text" class="chatMessage"
                                           id="chatMessage<?php echo $currentSession; ?>"
                                           placeholder="Escribe tu mensaje..."/>
                                    <button class="submit chatButton" id="chatButton<?php echo $currentSession; ?>"><i
                                                class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } else { ?>
                    <br>
                    <br>
                    <strong><a href="login.php"><h3>Acceder al Chat</h3></a></strong>
                <?php } ?>
                <br>
                <br>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>