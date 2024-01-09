import { useState } from 'react';
import Chart from 'react-apexcharts';
export default function ChartBox() {
    const [series, setSeries] = useState([
        {
          name: 'Sales',
          data: []
        }
      ]);
    
      const [options, setOptions] = useState({
        chart: {
          id: 'basic-bar'
        },
        xaxis: {
          categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
        }
      });
      return (
        <>
        <Chart options={options} series={series} type="bar"  height={400} />
        </>
      )
}