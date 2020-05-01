package com.info.aplikasiinfomaskapai;

import com.info.aplikasiinfomaskapai.Maskapai;
import com.info.aplikasiinfomaskapai.R;

import java.util.ArrayList;

public class IsiData {
    private static String[] namamaskapai = {
            "Garuda Indonesia",
            "Singapore Airlines",
            "Malaysia Airlines",
            "Thai Airways",
            "China Airlines",
            "Cathay Pacific",
            "Qantas",
            "Lufthansa",
            "Air France",
            "KLM",
            "British Airways",
            "American Airlines"
    };

    private static String[] detailmaskapai = {
            "Maskapai ( Flag Carrier ) kebanggaan Indonesia",
            "Maskapai ( Flag Carrier ) kebanggaan Singapura",
            "Maskapai ( Flag Carrier ) kebanggaan Malaysia",
            "Maskapai ( Flag Carrier ) kebanggaan Thailand",
            "Maskapai ( Flag Carrier ) kebanggaan Taiwan",
            "Maskapai ( Flag Carrier ) kebanggaan Hong Kong",
            "Maskapai ( Flag Carrier ) kebanggaan Australia",
            "Maskapai ( Flag Carrier ) kebanggaan Jerman",
            "Maskapai ( Flag Carrier ) kebanggaan Perancis",
            "Maskapai ( Flag Carrier ) kebanggaan Belanda",
            "Maskapai ( Flag Carrier ) kebanggaan Britania Raya",
            "Maskapai ( Flag Carrier ) kebanggaan Amerika Serikat"
    };

    private static int[] gambarmaskapai = {
            R.drawable.garuda_indonesia,
            R.drawable.singapore_airlines,
            R.drawable.malaysia_airlines,
            R.drawable.thai_airways,
            R.drawable.china_airlines,
            R.drawable.cathay_pacific,
            R.drawable.qantas,
            R.drawable.lufthansa,
            R.drawable.airfrance,
            R.drawable.klm,
            R.drawable.british_airways,
            R.drawable.american_airlines
    };

    static ArrayList<Maskapai> getListData() {
        ArrayList<Maskapai> daftar = new ArrayList<>();
        for (int a = 0; a < namamaskapai.length; a++) {
            Maskapai maskapai = new Maskapai();
            maskapai.setNama(namamaskapai[a]);
            maskapai.setDetail(detailmaskapai[a]);
            maskapai.setFoto(gambarmaskapai[a]);
            daftar.add(maskapai);
        }
        return daftar;
    }


}
