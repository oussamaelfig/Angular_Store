import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';
import { BdService } from '../bd.service';
import { MatPaginator } from '@angular/material/paginator';
import { MatSort } from '@angular/material/sort';
import { MatTableDataSource } from '@angular/material/table';
import { AfterViewInit, ViewChild } from '@angular/core';

@Component({
  selector: 'app-admin',
  templateUrl: './admin.component.html',
  styleUrls: ['./admin.component.css']
})
export class AdminComponent implements OnInit, AfterViewInit{


  @ViewChild(MatSort) sort!: MatSort;
  @ViewChild(MatPaginator) paginator!: MatPaginator;

  users:any;

  dataSource:any

  observer2:any = this.bd.getUser().subscribe((res) => {
    this.dataSource = res.body;
    console.log(this.dataSource);
    this.dataSource = new MatTableDataSource(this.dataSource);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
  });



  //Inititalisation de users
  observer:any = this.bd.getUser().subscribe((res) => {
    this.users = res.body;
    console.log(this.users);
    console.log(this.dataSource);
    //this.dataSource.sort = this.sort;
  });

  //FormControl variable pour creation usager
  nom = new FormControl('');
  prenom = new FormControl('');
  motDePasse = new FormControl('');
  identifiant = new FormControl('');
  role = new FormControl('');


  ngAfterViewInit() {
    //this.dataSource.paginator = this.paginator;
    console.log(this.paginator);
    //this.dataSource.sort = this.sort;
    console.log(this.sort);
  }


  constructor(private bd:BdService) {}

  //Pour material table
  colonneAfficher:string[] = ['id', 'username', 'motdepasse', 'nom', 'prenom', 'role', 'delete'];



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
