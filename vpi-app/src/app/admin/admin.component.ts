import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';
import { BdService } from '../bd.service';
import { MatPaginator, PageEvent } from '@angular/material/paginator';
import { MatSort } from '@angular/material/sort';
import { MatTableDataSource } from '@angular/material/table';
import {AfterViewInit, ViewChild} from '@angular/core';

@Component({
  selector: 'app-admin',
  templateUrl: './admin.component.html',
  styleUrls: ['./admin.component.css']
})
export class AdminComponent implements OnInit{
  //DataSource
  dataSource:any = this.bd.getUser().subscribe((res) => {
    this.dataSource = res.body;
    console.log(this.dataSource);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
  });
  //Inititalisation de users
  users: any = this.bd.getUser().subscribe((res) => {
    this.users = res;
    console.log(this.dataSource);
  });

  @ViewChild(MatSort) sort!: MatSort;
  @ViewChild(MatPaginator) paginator!: MatPaginator;

  //FormControl variable pour creation usager
  nom = new FormControl('');
  prenom = new FormControl('');
  motDePasse = new FormControl('');
  identifiant = new FormControl('');
  role = new FormControl('');



  constructor(private bd:BdService) {}

  //Pour material table
  colonneAfficher:string[] = ['id', 'username', 'motdepasse', 'nom', 'prenom', 'role'];



  ngOnInit(){}
  //fonction creer usager

  //fonction lister usager

  //table material pour lister et supprimer usager.
}
export interface Usager {
  identifiant: string;
  motdepasse: string;
  id: number;
  nom: string;
  prenom: string;
  role: string;
}
