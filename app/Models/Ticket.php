<?php

    namespace App\Models;

    class Ticket {
        public static function all(){
            return [
                [
                    'id' => 1,
                     'summary' => 'AFAZFAZFAZFAZFAZFA',
                     'description' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                     AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                     AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
                     'status' => 'New'
                ],
                [
                    'id' =>2,
                     'summary' => 'AFAZFAZFAZFAZFAZFA',
                     'description' => 'ZADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                     AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                     AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
                     'status' => 'Pending'

                ],
                [
                    'id' =>3,
                     'summary' => 'AFAZFAZFAZFAZFAZFA',
                     'description' => 'ZADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                     AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                     AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
                     'status' => 'Closed'
                ],

            ];
        }

        public static function find($id){
            $tickets = self::all();

            foreach($tickets as $ticket) {
                if($ticket['id'] == $id){
                    return $ticket;
                }
            }
        }

    }

?>
