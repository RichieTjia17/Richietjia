package com.info.aplikasiinfomaskapai;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Intent;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.TextView;

import java.security.cert.Extension;
import java.util.ArrayList;

public class MainActivity extends AppCompatActivity implements View.OnClickListener{
    private RecyclerView daftarnamamaskapai;
    private ArrayList<Maskapai> daftar = new ArrayList<>();
    private Button klik;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        daftarnamamaskapai = findViewById(R.id.list_maskapai);
        daftarnamamaskapai.setHasFixedSize(true);

        daftar.addAll(IsiData.getListData());
        Tampillist();

        klik = findViewById(R.id.tombolinfo);
        klik.setOnClickListener(this);
    }

    private void Tampillist() {
        daftarnamamaskapai.setLayoutManager(new LinearLayoutManager(this));
        DaftarMaskapai daftarMaskapai = new DaftarMaskapai(daftar);
        daftarnamamaskapai.setAdapter(daftarMaskapai);

        daftarMaskapai.setOnItemClickCallback(new DaftarMaskapai.OnItemClickCallback() {
            @Override
            public void onItemClicked(Maskapai data) {
                if(data.getNama() == "Garuda Indonesia"){
            Intent move = new Intent(MainActivity.this, GarudaIndonesiaActivity.class);
            startActivity(move);
            }
                else if(data.getNama() == "Singapore Airlines"){
                    Intent move = new Intent(MainActivity.this, SingaporeAirlinesActivity.class);
                    startActivity(move);
                }
                else if(data.getNama() == "Malaysia Airlines"){
                    Intent move = new Intent(MainActivity.this, MalaysiaAirlinesActivity.class);
                    startActivity(move);
                }
                else if(data.getNama() == "Thai Airways"){
                    Intent move = new Intent(MainActivity.this, ThaiAirwaysActivity.class);
                    startActivity(move);
                }
                else if(data.getNama() == "China Airlines"){
                    Intent move = new Intent(MainActivity.this, ChinaAirlinesActivity.class);
                    startActivity(move);
                }
                else if(data.getNama() == "Cathay Pacific"){
                    Intent move = new Intent(MainActivity.this, CathayPacificActivity.class);
                    startActivity(move);
                }
                else if(data.getNama() == "Qantas"){
                    Intent move = new Intent(MainActivity.this, QantasActivity.class);
                    startActivity(move);
                }
                else if(data.getNama() == "Lufthansa"){
                    Intent move = new Intent(MainActivity.this, LufthansaActivity.class);
                    startActivity(move);
                }
                else if(data.getNama() == "Air France"){
                    Intent move = new Intent(MainActivity.this, AirFranceActivity.class);
                    startActivity(move);
                }
                else if(data.getNama() == "KLM"){
                    Intent move = new Intent(MainActivity.this, KLMActivity.class);
                    startActivity(move);
                }
                else if(data.getNama() == "British Airways"){
                    Intent move = new Intent(MainActivity.this, BritishAirwaysActivity.class);
                    startActivity(move);
                }
                else{
                    Intent move = new Intent(MainActivity.this, AmericanAirlinesActivity.class);
                    startActivity(move);
                }

            }
        });
    }


    @Override
    public void onClick(View v) {
        switch (v.getId()){
            case R.id.tombolinfo:
                Intent moveIntent = new Intent(MainActivity.this, InfoPemilik.class);
                startActivity(moveIntent);
                break;
        }
    }
}

