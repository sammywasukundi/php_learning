<?php
    function get_billets($offset, $limit)
    {
        global $bdd;
        $offset = (int) $offset;
        $limit = (int) $limit;
        $req = $bdd->prepare('SELECT id, titre, contenu, dateDeCreation
        FROM billets ORDER BY dateDeCreation DESC LIMIT
        :offset, :limit');
        $req->bindParam(':offset', $offset, PDO::PARAM_INT);
        $req->bindParam(':limit', $limit, PDO::PARAM_INT);
        $req->execute();
        $billets = $req->fetchAll();


        return $billets;
    }
// ?>