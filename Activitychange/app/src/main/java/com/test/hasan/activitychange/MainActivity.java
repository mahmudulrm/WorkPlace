package com.test.hasan.activitychange;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;

public class MainActivity extends Activity {

    Button button1;
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btnClick();
    }
    public void btnClick() {
        button1 = (Button) findViewById(R.id.like1);
        button1.setOnClickListener(new OnClickListener() {
            @Override
            public void onClick(View arg0) {
                Intent browserIntent = new Intent(MainActivity.this, scond_view.class);
                startActivity(browserIntent);
            }
        });
    }
}