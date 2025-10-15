<?php

require_once __DIR__ . '/../Database.php';

class Mensaje
{
 public static function all(): array
 {
  $pdo = Database::getConnection();
  $st = $pdo->query("SELECT * FROM mensajes order by id_mensaje desc");
  return $st->fetchAll();
 }

 public static function find(int $id): ?array{
  $pdo = Database::getConnection();
  $st = $pdo->query("SELECT * FROM mensajes WHERE id_mensaje = ?");
  $st->execute([$id]);
  $r =$st->fetch();
  return $r ?:null;
 }

 public static function create(array $d): int{
  $pdo = Database::getConnection();
  $st = $pdo->query("INSERT INTO mensaje(titulo, descripcion, imagen, fecha) VALUES (?, ?, ?, ?)");
  $st->execute([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha']]);
  return (int)$pdo->lastInsertId();
 }

 public static function updateById(int $id, array $d): bool{
  $pdo = Database::getConnection();
  $st = $pdo->query("UPDATE mensajes SET titulo = ?, descripcion = ?, imagen = ?, fecha = ? WHERE id_mensaje = ?");
  $st->execute([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha'], $id]);

  return $st;
 }

 public static function deleteById(int $id): bool{
  $pdo = Database::getConnection();
  $st = $pdo->query("delete from mensaje whwre id_mensaje=?");
  $st->execute([$id]);
  return $st;
  }
}