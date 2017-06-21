<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 6/19/16
 * Time: 3:16 PM
 */
namespace App\Library {
    class Ami{
        public function login_queue(){
            return "OK login queue";
        }


        public function make_call($number, $contact_id , $ext, $agentcode){

            $strHost = "128.199.201.82";
            $strUser = "admin";
            $strSecret = "vietexpert.net1!";
            $Port = 5038;
            $project = '10';
            $strChannel= $ext;
            $strContext = "from-crm-sip-c2c";

            //echo "ext: $ext ";

             $strWaitTime = "30";
            $strPriority = "1";
            $strMaxRetry = "2";

            $pos=strpos ($number,"local");
            if ($number == null) :
                exit() ;
            endif ;
            if ($pos===false) :
                $errno=0 ;
                $errstr=0 ;
                $strCallerId = "Agent <$strChannel>";
                $oSocket = fsockopen ($strHost, $Port, $errno, $errstr, 20);
                if (!$oSocket) {
                    echo "$errstr ($errno)<br>\n";
                } else {
                    fputs($oSocket, "Action: login\r\n");
                    fputs($oSocket, "Events: Off\r\n");
                    fputs($oSocket, "Username: $strUser\r\n");
                    fputs($oSocket, "Secret: $strSecret\r\n\r\n");
                    fputs($oSocket, "Action: originate\r\n");
                    fputs($oSocket, "Channel: SIP/$strChannel\r\n");
                    fputs($oSocket, "WaitTime: $strWaitTime\r\n");
                    fputs($oSocket, "CallerId: $strCallerId\r\n");
                    fputs($oSocket, "Exten: $number\r\n");
                    fputs($oSocket, "Context: $strContext\r\n");
                    //fputs($oSocket, "Variable: phone=$number\r\n");
                    //fputs($oSocket, "Variable: project_id=$project\r\n");
                    //fputs($oSocket, "Variable: contact_id=$contact_id\r\n");
//                    fputs($oSocket, "Variable: ticket_id=$ticket_id\r\n");
//                    fputs($oSocket, "Variable: ticket_code=$ticket_code\r\n");
//                    fputs($oSocket, "Variable: campaign_id=$campaign_id\r\n");
                    //fputs($oSocket, "Variable: agent_code=$agentcode\r\n");
                    fputs($oSocket, "Priority: $strPriority\r\n\r\n");
                    fputs($oSocket, "Action: Logoff\r\n\r\n");
                    sleep(2);
                    fclose($oSocket);

                }
            else :
                exit() ;
            endif ;

        }


        public function queue_add($p_username, $ext, $p_queue_ext, $p_priority = 1 ){  //$pause = false

            //echo "asterisk -rx \"queue add member Local/$ext@from-queue/n to $p_queue_ext penalty $p_priority as $p_username\"";

            exec("asterisk -rx \"queue add member Local/$ext@from-queue/n to $p_queue_ext penalty $p_priority as $p_username\"");
            //exec("ssh ".SSH_USER_ASTERISK."@".SSH_HOST_ASTERISK." \"asterisk -rx 'queue add member Local/$p_ext@from-queue/n to $p_queue_ext penalty $p_priority as $p_username'\" ");

            /*
            $strHost = "128.199.201.82";
            $strUser = "admin";
            $strSecret = "vietexpert.net1!";
            $Port = 5038;

            $oSocket = fsockopen ($strHost, $Port, $errno, $errstr, 20);
            if (!$oSocket) {
                echo "$errstr ($errno)<br>\n";
            } else {
                fputs($oSocket, "Action: login\r\n");
                fputs($oSocket, "Events: Off\r\n");
                fputs($oSocket, "Username: $strUser\r\n");
                fputs($oSocket, "Secret: $strSecret\r\n\r\n");
                fputs($oSocket, "Action: QueueAdd\r\n");
                fputs($oSocket, "Queue: $queue\r\n");
                fputs($oSocket, "Interface: Local/$ext@from-queue/n\r\n");
                fputs($oSocket, "Penalty: 0\r\n");
                fputs($oSocket, "Paused: $pause\r\n");
                fputs($oSocket, "MemberName: $username\r\n");
                fputs($oSocket, "Action: Logoff\r\n\r\n");
                sleep(2);
                fclose($oSocket);
            }*/
        }

        public function queue_remove($p_ext, $p_queue){
            //echo "asterisk -rx \"queue remove member Local/$p_ext@from-queue/n from $p_queue\"";
            exec("asterisk -rx \"queue remove member Local/$p_ext@from-queue/n from $p_queue\"");
            //exec("ssh ".SSH_USER_ASTERISK."@".SSH_HOST_ASTERISK." \"asterisk -rx 'queue remove member Local/$p_ext@from-queue/n from $p_queue_ext'\" ");
            /*
            $strHost = "128.199.201.82";
            $strUser = "admin";
            $strSecret = "vietexpert.net1!";
            $Port = 5038;

            $oSocket = fsockopen ($strHost, $Port, $errno, $errstr, 20);
            if (!$oSocket) {
                echo "$errstr ($errno)<br>\n";
            } else {
                fputs($oSocket, "Action: login\r\n");
                fputs($oSocket, "Events: Off\r\n");
                fputs($oSocket, "Username: $strUser\r\n");
                fputs($oSocket, "Secret: $strSecret\r\n\r\n");
                fputs($oSocket, "Action: QueueRemove\r\n");
                fputs($oSocket, "Queue: $queue\r\n");
                fputs($oSocket, "Interface: Local/$ext@from-queue/n\r\n");
                fputs($oSocket, "Action: Logoff\r\n\r\n");
                sleep(2);
                fclose($oSocket);
            }*/
        }

        public function queue_pause($ext, $queue){
            $strHost = "128.199.201.82";
            $strUser = "admin";
            $strSecret = "vietexpert.net1!";
            $Port = 5038;

            $oSocket = fsockopen ($strHost, $Port, $errno, $errstr, 20);
            if (!$oSocket) {
                echo "$errstr ($errno)<br>\n";
            } else {
                fputs($oSocket, "Action: login\r\n");
                fputs($oSocket, "Events: Off\r\n");
                fputs($oSocket, "Username: $strUser\r\n");
                fputs($oSocket, "Secret: $strSecret\r\n\r\n");
                fputs($oSocket, "Action: QueuePause\r\n");
                fputs($oSocket, "Queue: $queue\r\n");
                fputs($oSocket, "Interface: Local/$ext@from-queue/n\r\n");
                fputs($oSocket, "Paused: true\r\n");
                fputs($oSocket, "Action: Logoff\r\n\r\n");
                sleep(2);
                fclose($oSocket);
            }
        }

        public function queue_unpause($ext, $queue){
            $strHost = "128.199.201.82";
            $strUser = "admin";
            $strSecret = "vietexpert.net1!";
            $Port = 5038;

            $oSocket = fsockopen ($strHost, $Port, $errno, $errstr, 20);
            if (!$oSocket) {
                echo "$errstr ($errno)<br>\n";
            } else {
                fputs($oSocket, "Action: login\r\n");
                fputs($oSocket, "Events: Off\r\n");
                fputs($oSocket, "Username: $strUser\r\n");
                fputs($oSocket, "Secret: $strSecret\r\n\r\n");
                fputs($oSocket, "Action: QueuePause\r\n");
                fputs($oSocket, "Queue: $queue\r\n");
                fputs($oSocket, "Interface: Local/$ext@from-queue/n\r\n");
                fputs($oSocket, "Paused: false\r\n");
                fputs($oSocket, "Action: Logoff\r\n\r\n");
                sleep(2);
                fclose($oSocket);
            }
        }





    }
}