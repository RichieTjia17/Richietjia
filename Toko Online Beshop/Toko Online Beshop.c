#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>
#include <ctype.h>

void clrscr() { //untuk membersihkan tampilan
	system("@cls||clear");
}

int indeks=0,in=0; //menghitung jumlah barang dan kurir
char nama[100][50], asal[100][50], ulang;
int nomor[100], berat[100], harga[100];
char nam[100][50];
int no[100], har[100];
int jumlah[3][3],row1,col1,row2,col2,hasil,g;

void utama() { //header
	printf("|  Selamat datang di Beshop"); 
	printf("\n|  Tempat untuk anda mencari berbagai barang kebutuhan anda");
	printf("\n|___________________________________________________________\n\n");
}

void menu() { //tampilan menu
	printf("|  Pilihan menu :\n\n");
	printf("1. List barang\n");
	printf("2. List kurir\n");
	printf("3. Urutan kurir\n");
	printf("4. Cari Barang\n");
	printf("5. Transaksi\n");
}

void baca() { //membaca file barang dan mendeklarasikan ke variabel
	FILE *daftar; 
	daftar=fopen("daftarbarang.txt","r+"); //membuka file
	while(fscanf(daftar,"%d %s %d %d %s",&nomor[indeks], &nama[indeks], &berat[indeks], &harga[indeks], &asal[indeks])!=EOF) //deklarasi ke variabel
	{
		indeks++; //menambahkan junlah barang
	}
	fclose(daftar);
}

void tampil() { //menampilkan daftar barang
	int b;
	printf("\nList barang di toko kami\n\n");
	printf("No\t Nama\t\t\t Berat(gram)\t Harga(Rp)\t Asal\n");
	for (b=0;b<indeks;b++)	
	{
		printf("%-5d\t %-20s\t %d\t\t %d\t\t %s \n",nomor[b], nama[b], berat[b], harga[b], asal[b]);
	}
}

void baca_kurir() { //membaca kurir
	FILE *kurir;
	kurir=fopen("daftarkurir.txt","r+");//membuka file kurir
	while(fscanf(kurir,"%d %s %d",&no[in], &nam[in], &har[in])!=EOF) //deklarasi kurir ke variabel
	{
		in++;//menambahkan jumlah kurir
	}
	fclose(kurir);
}

void tampil_kurir() { //menampilkan daftar kurir
	int c;
	printf("List kurir di toko kami\n\n");
	printf("No\t Nama\t\t\t Harga\n");
	for (c=0;c<in;c++)	
	{
		printf("%-5d\t %-20s\t %-10d \n",no[c], nam[c], har[c]);
	}
}

void random() { 
	srand(time(0));
	int p,k;
	row1=rand()%3;
	col1=rand()%3;
	row2=rand()%3;// randomize angka di array
	col2=rand()%3;
	utama();
	printf("Masukkan captcha di bawah ini untuk bisa lanjut \n");
	for (p=0;p<3;p++)
	{
		for (k=0;k<3;k++)
		{
			jumlah[p][k] = rand()%51; //random dalam angka 0-50
			printf("[%d][%d] %d\t",p,k,jumlah[p][k]);
		}
		printf("\n");
	}
	printf("\n|  Berapakah hasil penjumlahan dari matriks[%d][%d] dan matriks[%d][%d] ? : ",row1,col1,row2,col2);
	scanf("%d",&g);
	hasil = jumlah[row1][col1] + jumlah[row2][col2];
} 

void math(int d,int e,int beli) { //fungsi untuk menghitung harga dari transaksi
	int item,total,brtot,kur;
	item = harga[d-1]*beli;
	brtot = berat[d-1]*beli;
	if (brtot>=1000) {
		kur = 2*har[e-1];
	}
	else {
		kur = har[e-1];
	}
	total = item + kur;
	printf("\n|  Berat akhir = %d gram\n",brtot);
	printf("|  Total harga yang harus dibayar = Rp %d\n",total);
}

void sortingdes() { //sorting kurir dari termahal
   	int i,j,temp;
   	
	for(i=0; i<in; i++){
		char temp2[100];
		for(j=i+1; j<in; j++){
			if(har[i]<har[j]){
				temp=har[i];
				har[i]=har[j];
				har[j]=temp;
				
				strcpy(temp2,nam[i]);
				strcpy(nam[i],nam[j]);
				strcpy(nam[j],temp2);	
				}
		}
	}
}

void sortingas() { //sorting kurir dari termurah
   	int i,j,temp;
   	
	for(i=0; i<in; i++){
		char temp2[100];
		for(j=i+1; j<in; j++){
			if(har[i]>har[j]){
				temp=har[i];
				har[i]=har[j];
				har[j]=temp;
				
				strcpy(temp2,nam[i]);
				strcpy(nam[i],nam[j]);
				strcpy(nam[j],temp2);	
				}
		}
	}
}

void cari() { //fungsi untuk fitur searching
	int z,masuk;
	printf("Masukkan angka dari barang yang ingin anda cari : ");
	scanf("%d",&masuk);
	printf("\nNo\tNama\t\tBerat\tHarga\tAsal\n");
	for (z=0;z<16;z++)
	{
		if (nomor[z] == masuk)
		{
			printf("%d\t%s\t%d\t%d\t%s\n",nomor[masuk-1],nama[masuk-1],berat[masuk-1],harga[masuk-1],asal[masuk-1]);
		}
	}
}

void trx(int d, int beli, int e) { //menu 5 yaitu transaksi
	clrscr();
	printf("\n|  Jawaban anda benar\n");
	printf("|  Silahkan lanjutkan\n\n");
	printf("Masukkan nomor barang yang anda inginkan (Nomor dari list barang) : ");
	scanf("%d",&d);
	printf("Masukkan jumlah barang yang ingin anda beli : ");
	scanf("%d",&beli);
	printf("Masukkan nomor kurir yang anda inginkan (Nomor dari list kurir) : ");
	scanf("%d",&e);
	printf("\n|  Deskripsi barang : \n");
	printf("Nama barang : %s\n",nama[d-1]);
	printf("Berat awal : %d gram\n",berat[d-1]);
	printf("Harga : Rp %d\n",harga[d-1]);
	printf("Asal : %s\n",asal[d-1]);
	printf("Nama Kurir : %s\n",nam[e-1]);
	printf("Jumlah pembelian : %d buah\n",beli);
	printf("Biaya pengiriman : Rp %d\n",har[e-1]);
	math(d,e,beli);
	printf("\n|  Tekan y untuk mengulang : ");
}

int main() { //fungsi main
	baca();
	baca_kurir();
	int a,i,j,pi,d,e,f,beli;
	do{
		clrscr();
		utama();
		menu();
		do{
		printf("\n|  Masukkan pilihan anda : ");
		scanf("%d",&pi);
		} while(pi<1 || pi>5);
		if (pi==1) {
			clrscr();
			printf("|  Anda telah memilih nomor 1! - Daftar barang\n");
			tampil();
			printf("\n|  Tekan y untuk mengulang : ");
			ulang = getch();
		}
		else if (pi==2) {
			clrscr();
			printf("|  Anda telah memilih nomor 2! - Daftar kurir\n\n");
			tampil_kurir();
			printf("\n|  Tekan y untuk mengulang : ");
			ulang = getch();
		}
		else if (pi==3)	{
			clrscr();
			printf("| Anda telah memilih nomor 3! - Urutkan barang\n\n");
			printf("1. Dari yang termurah\n");
			printf("2. Dari yang termahal\n");
			int i,k;
			do{
			printf("Masukkan Urutannya : ");
			scanf("%d",&k);	
			}while(k>2);
			if (k==1)
			{
				clrscr();
				printf("Daftar Kurir Dari yang Termurah\n");
				printf("\nNo\tNama Kurir \t\t Harga\n");
				sortingas();
				for (i=0; i<in; i++) 
				printf("%d\t%-20s \t %d \n", no[i], nam[i], har[i]); 
			}
			else
			{
				clrscr();
				printf("Daftar Kurir Dari yang Termahal\n");
				printf("\nNo\tNama Kurir \t\t Harga\n");
				sortingdes();
				for (i=0; i<in; i++) 
				printf("%d\t%-20s \t %d \n", no[i], nam[i], har[i]);	
			}
			printf("\n|  Tekan y untuk mengulang : ");
			ulang = getch();
		}
		else if (pi==4)	{
			clrscr();
			printf("| Anda telah memilih nomor 4! - Cari barang\n\n");
			cari();
			printf("\n|  Tekan y untuk mengulang : ");
			ulang = getch();
		}
		else if (pi==5)	{
			clrscr();
			random();
			if (hasil==g) 
			{
				trx(d, beli, e);
				ulang = getch();
			}
			else 
			{
				printf("\n|  Jawaban anda salah, silahkan tekan y untuk mengulang : ");
				ulang = getch();
			}
		}
		
	} while(ulang=='Y' || ulang=='y');
}
