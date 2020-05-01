package com.info.aplikasiinfomaskapai;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;

import java.util.ArrayList;

public class DaftarMaskapai extends RecyclerView.Adapter<DaftarMaskapai.pengaturan> {
    private ArrayList<Maskapai> daftarmaskapai;
    private OnItemClickCallback onItemClickCallback;

    public void setOnItemClickCallback(OnItemClickCallback onItemClickCallback) {
        this.onItemClickCallback = onItemClickCallback;
    }

    public DaftarMaskapai(ArrayList<Maskapai> daftar) {

        this.daftarmaskapai = daftar;
    }
    @NonNull
    @Override
    public pengaturan onCreateViewHolder(@NonNull ViewGroup viewGroup, int viewType) {
        View view = LayoutInflater.from(viewGroup.getContext()).inflate(R.layout.listmaskapai, viewGroup, false);
        return new pengaturan(view);
    }

    @Override
    public void onBindViewHolder(@NonNull final pengaturan pengaturan, int array) {
        Maskapai hero = daftarmaskapai.get(array);
        Glide.with(pengaturan.itemView.getContext())
                .load(hero.getFoto())
                .apply(new RequestOptions().override(55, 55))
                .into(pengaturan.foto);
        pengaturan.nama.setText(hero.getNama());
        pengaturan.detail.setText(hero.getDetail());

        pengaturan.itemView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                onItemClickCallback.onItemClicked(daftarmaskapai.get(pengaturan.getAdapterPosition()));
            }
        });
    }

    @Override
    public int getItemCount() {
        return daftarmaskapai.size();
    }



    public class pengaturan extends RecyclerView.ViewHolder {
        ImageView foto;
        TextView nama, detail;
        public pengaturan(@NonNull View itemView) {
            super(itemView);
            foto = itemView.findViewById(R.id.airline_photo);
            nama = itemView.findViewById(R.id.text_nama);
            detail = itemView.findViewById(R.id.text_detail);
        }
    }

    public interface OnItemClickCallback {
        void onItemClicked(Maskapai data);
    }
}
