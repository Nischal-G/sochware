<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SW_CRUD extends CI_Controller {

  public function getTeam()
  {
      $this->db->select('*'); 
      $this->db->from('sw_team');
      $query = $this->db->get();
      return $query ;
  }

  public function getBlog()
  {
      $this->db->select('*'); 
      $this->db->from('sw_blog');
      $query = $this->db->get();
      return $query ;
  }

  public function getService()
  {
      $this->db->select('*'); 
      $this->db->from('sw_service');
      $query = $this->db->get();
      return $query ;
  }

  public function getAchievements()
  {
      $this->db->select('*'); 
      $this->db->from('sw_achievements');
      $query = $this->db->get();
      return $query ;
  }

  public function getAbout()
  {
      $this->db->select('*'); 
      $this->db->from('sw_about');
      $query = $this->db->get();
      return $query ;
  }

    public function getHomeslider()
  {
      $this->db->select('*'); 
      $this->db->from('sw_homeslider');
      $query = $this->db->get();
      return $query ;
  }
}