import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';
import { MatTableModule } from '@angular/material/table';
import { MatPaginatorModule } from '@angular/material/paginator';
import { MatSortModule } from '@angular/material/sort';
import { BdService } from '../bd.service';
import {MatPaginator} from '@angular/material/paginator';
import {MatTableDataSource} from '@angular/material/table';
import {AfterViewInit, ViewChild} from '@angular/core';

@Component({
  selector: 'app-admin',
  templateUrl: './admin.component.html',
  styleUrls: ['./admin.component.css']
})
export class AdminComponent implements AfterViewInit{
  //Inititalisation de users
  users: any = this.bd.getUser().subscribe((res) => {
    this.users = res.body;
    console.log(this.users);
  });
  //FormControl variable pour creation usager
  nom = new FormControl('');
  prenom = new FormControl('');
  motDePasse = new FormControl('');
  identifiant = new FormControl('');
  role = new FormControl('');
  dataSource:any;

  constructor(private bd:BdService) {}

  //Pour material table
  colonneAfficher:string[] = ['id', 'username', 'motdepasse', 'nom', 'prenom', 'role'];

  @ViewChild(MatPaginator) paginator: MatPaginator|undefined;

  ngAfterViewInit() {
    this.dataSource = new MatTableDataSource<usager>(this.users);
    this.dataSource.paginator = this.paginator;
  }

  //fonction creer usager

  //fonction lister usager

  //table material pour lister et supprimer usager.
}
export interface usager {
  id: number;
  identifiant: string;
  motdepasse: string;
  nom: string;
  prenom: string;
  role: string;
}
