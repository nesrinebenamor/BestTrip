<?php

namespace MyApp\FrontBundle\Entity;

class Mail {

 private $nom;

 private $prenom;

 private $tel;

 private $from;

 private $text;
 
 public function getNom() {
     return $this->nom;
 }

 public function getPrenom() {
     return $this->prenom;
 }

 public function getTel() {
     return $this->tel;
 }

 public function getFrom() {
     return $this->from;
 }

 public function getText() {
     return $this->text;
 }

 public function setNom($nom) {
     $this->nom = $nom;
 }

 public function setPrenom($prenom) {
     $this->prenom = $prenom;
 }

 public function setTel($tel) {
     $this->tel = $tel;
 }

 public function setFrom($from) {
     $this->from = $from;
 }

 public function setText($text) {
     $this->text = $text;
 }


}

