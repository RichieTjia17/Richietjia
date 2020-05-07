#include <iostream>
#include <conio.h>
#include <fstream>
#include <iomanip>
#include <ctime>
#include <cstdlib>
using namespace std;

class games{
	protected:
		int hasil;
        string nama;
	public:
	    games()
		{
			hasil=0;
			nama = " ";
		}
		int get_hasil()
		{
			return hasil;
		}
		void set_hasil(int a)
		{
			this->hasil=a;
		}
        string get_nama()
        {
            return nama;
        }
		~games()
		{
			cout << "\n\n\t\t---Program has end---";
		}
};
class saldo{
    public:
    virtual int bal()=0;
    int has;
    void set_num(int b)
    {
        this->has=b;
    }
};

class xp : public saldo
{
    public:

    int bal()
    {
        int xp;
        if (has<500)
        {
            xp = 0;
            cout << xp;
        }
        else
        {
            int temp;
            temp = has/500;
            xp = temp * 50000;
            cout << xp;
        }
    }

};

class hit : public games
{
	public:
	int get_angka()
	{
		return hasil;
	}
	int set_angka(int a)
	{
		this->hasil=a;
	}
	void set_nama(string nama)
        {
            this->nama=nama;
        }
};


void clrscr()
{
	system("@cls||clear");
}

void menu()
{
	cout << "---------------------------------------------------------------------\n";
	cout << "\tSelamat Datang di Games SEPIK ( Seberapa Pintar Kamu ) \n";
	cout << "---------------------------------------------------------------------\n";
	cout << "\n\n\t\t\t Games ini akan menguji seberapa pintar kamu dalam perhitungan matematika\n";
	cout << "\t\t\t\t\t(atau mungkin sebaliknya) :):):)\n\n";
	cout << "\n Silahkan pilih menu yang ingin anda telusuri : \n";
	cout << "1. Cara Bermain\n";
	cout << "2. Langsung Main\n";
	cout << "3. Lihat Skormu\n";
	cout << "4. Selesai saja dah\n";
}

void pilihan1()
{
	cout << "\n\n\tCara Bermain : \n" << endl;
	cout << "\t1. Cara bermainnya adalah dengan menjawab semua perhitungan dengan benar dan cepat" << endl;
	cout << "\t2. Setiap 1 perhitungan yang benar akan bernilai 100 poin" << endl;
	cout << "\t3. Setelah waktu berjalan 5 detik, Anda harus menjawab pertanyaan tersebut";
	cout << "\t4. Jika Anda menjawab satu soal yang salah, permainan akan otomatis berhenti" << endl;
	cout << "\t5. Jawaban Anda dalam bentuk bilangan bulat, jadi jika ketemu jawaban desimal, bulatkan ke bilangan kecilnya" << endl;
	cout << "\t6. Hasil jawaban Anda dapat dilihat pada menu -Lihat Skormu- " << endl;
	cout << "\t7. Selamat Bermain\n" << endl;
	cout << "\nTekan enter untuk kembali ke menu utama ";
}

int acak(int acak,int a,int b){
	int tot;
	if(acak == 0){
  		tot = a + b;
 	}else if(acak == 1){
   		tot = a - b;
 	}else if(acak == 2){
   		tot = a * b;
 	}else if(acak == 3){
  		tot = a / b;
 	}
 	return tot;
}

void acakPrint(int acak){
	if(acak == 0){
  		cout<<"+";
 	}else if(acak == 1){
   		cout<<"-";
 	}else if(acak == 2){
   		cout<<"*";
 	}else if(acak == 3){
  		cout<<"/";
 	}
}

int wait (double second)
{

  clock_t endwait;
  endwait = clock () + second * CLOCKS_PER_SEC ;
  while (clock() < endwait) {}

}

int main()
{
	hit angka;
	games hitung;
	saldo *poi;
	int pilihan;
	string nama;
	time_t now = time(0);
   	tm *ltm = localtime(&now);
	do{
	clrscr();
	menu();
	do{

			cout << "\n\n>>> Masukkan Pilihan Kamu : ";
			cin >> pilihan;

	}while (pilihan<1 || pilihan>4);
	switch(pilihan){
		case 1:{ clrscr();
				 pilihan1();
				 getch();
			break;
		}

		case 2:{ clrscr();
                 poi = new xp();
                 int poin=0,has=0;
                 cin.sync();
                 cin.clear();
                 cout << "\n\tMasukkan Nama Anda telebih dahulu : ";
				 getline(cin,nama);

				char check[20];
				int no, main;

				 angka.set_nama(nama);
				 srand (time(NULL));
				 int total,jawaban,angka1,angka2,angka3,op1,op2,pil;
                 cout << "\n\tApakah Jenis Perhitungan Anda ?\n";
                 cout << "1. Perhitungan 1...10         2. Perhitungan lebih dari 10\n";
                 cout << "\n\tMasukkan Pilihan Anda : ";
                 cin >> pil;
                 do{
                    if (pil==1)
                    {
                     do{
				 	angka1 = rand() % 10+1;
					angka2 = rand() % 10+1;
					angka3 = rand() % 10+1;
					op1 = rand() % 4;
				 	op2 = rand() % 4;

				 	total = acak(op1,angka1,angka2);
				 	total = acak(op2,total,angka3);
				 	cout<<"\n\n"<< angka1<<" ";
				 	acakPrint(op1);
				 	cout<<" "<<angka2<<" ";
					acakPrint(op2);
					cout<<" "<<angka3;
				 	cout << "\nWaktu : ";

				 	for (int i=5;i>=1;i--)
                    {
                        cout << "\t" << i,wait(1);

                    }
                    cout<<"\n\nMasukan Jawaban anda : ";
                    cin>>jawaban;
				 	angka.set_angka(jawaban);
				 	if(jawaban == total){
				 		cout<<"[ True ]";
				 		poin=poin+100;
				 		has+=100;
						getch();

					}
					else
                    {
                        cout<<"\nYour Answer Wrong";
                        getch();
                    }
				 }while(angka.get_angka() == total);
                    }

                 else if (pil==2)
                 {
                     do{
				 	angka1 = rand() % 100+10;
					angka2 = rand() % 100+10;
					angka3 = rand() % 100+10;
					op1 = rand() % 4;
				 	op2 = rand() % 4;

				 	total = acak(op1,angka1,angka2);
				 	total = acak(op2,total,angka3);
				 	cout<<"\n\n"<< angka1<<" ";
				 	acakPrint(op1);
				 	cout<<" "<<angka2<<" ";
					acakPrint(op2);
					cout<<" "<<angka3;
				 	cout << "\nWaktu : ";

				 	for (int i=5;i>=1;i--)
                    {
                        cout << "\t" << i,wait(1);

                    }
                    cout<<"\n\nMasukan Jawaban anda : ";
                    cin>>jawaban;
				 	angka.set_angka(jawaban);
				 	if(jawaban == total){
				 		cout<<"[ True ]";
				 		poin=poin+100;
				 		has+=100;
						getch();
					}
					else
                    {
                        cout<<"\nYour Answer Wrong";
                        getch();
                    }
				 }while(angka.get_angka() == total);
                 }

                 else
                 {
                     cout << "Salah Masukkan Pilihan";
                 }
                 }while (pil<1 || pil>2);



				 cout<<"\n\nYour Point = " << poin;
				 hitung.set_hasil(poin);
				 poi->set_num(has);

				 if(poin != 0){
				 ofstream data;
				 data.open("member.txt", ios::app);
				 data<<endl<<nama <<" "<<poin;
				 data.close();
				 getch();
				}

			break;
		}

        case 3:{ clrscr();
                 poi = new xp();
                 cout << "===================================================================================";
                 cout << "=====================================\n";
                 cout << "\n\n\t\t\t\t\tSelamat atas permainannya !!!\n\n";
                 cout << "===================================================================================";
                 cout << "=====================================\n\n";
                 cout << "\n\n\tBerikut adalah hasil permainan Anda : \n" << endl;

                 ifstream member("member.txt");
				string data[100];
				int number[100];
				string check;
				int angka;
				int no = 0;
				cout << "=================================================" << endl;
				cout << "| Nama \t\t\t\t| \tSkor \t|";
				cout << "\n=================================================";
				while(!member.eof()){
					member>>check;
					member>>angka;
					cout<<endl<<"| "<<check<<setw(26)<<right<<" \t"<<angka<<" \t|";
				}
				cout << "\n=================================================";

                 getch();
            break;
        }
        case 4:{ clrscr();

			break;
		}
	}
	}while (pilihan!=4);
	return 0;
}


