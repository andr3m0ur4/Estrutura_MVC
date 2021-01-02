<?php

    class Anuncio extends Model
    {
        public function getQuantidade()
        {
            $sql = "SELECT COUNT(*) AS counter FROM anuncios";
            $sql = $this->db->query($sql);

            if ($sql->rowCount() > 0) {
                $sql = $sql->fetch();
                return $sql['counter'];
            }

            return 0;
        }
    }
